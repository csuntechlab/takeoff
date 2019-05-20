<?php
namespace Tests\Feature;

use Tests\TestCase;
use Mockery;
use App\Models\User;
use App\Models\RegistrationAccessToken;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;

use App\Services\RegisterService;

use App\Contracts\LoginContract;

class RegisterServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $userModelRepo;
    protected $loginService;

    public function setUp()
    {
        parent::setUp();
        $this->userModelRepo = Mockery::spy(UserModelRepositoryInterface::class);
        $this->loginService = Mockery::spy(LoginContract::class);

        $this->service = new RegisterService($this->userModelRepo, $this->loginService);
    }

    /**
     * @test
     * @group noFramework
     */
    public function registerUserEmail_returns_a_student()
    {
        $input = [
            "email" => "teehee@gnomsayin.com"
        ];

        $mockUser = new User(['user_id' => '251']);
        $mockRole = "student";

        $this->userModelRepo
            ->shouldReceive('findByEmail')
            ->with('teehee@gnomsayin.com')
            ->andReturn(null);

        $this->userModelRepo
            ->shouldReceive('registerUserEmail')
            ->with($input, $mockRole)
            ->andReturn($mockUser);

        $this->userModelRepo
            ->shouldReceive('generateAccessCode')
            ->once();

        $this->userModelRepo
            ->shouldReceive('sendMail')
            ->andReturn(true);

        $resp = $this->service->registerUserEmail($input, $mockRole);
        $this->assertEquals($mockUser, $resp);
    }

    /**
     * @test
     * @group noFramework
     */
    public function completeRegistration_returns_a_completed_user()
    {
        $input = [
            "first_name" => "teehee@gnomsayin.com",
            "last_name" => "teehee@gnomsayin.com",
            "email" => "teehee@gnomsayin.com",
            "password" => "teehee@gnomsayin.com",
            "password_confirmation" => "teehee@gnomsayin.com",
            "accessCode" => "123123"
        ];
        $loginInput = [
            "email" => "teehee@gnomsayin.com",
            "password" => "teehee@gnomsayin.com"
        ];

        $mockUser = new User(['user_id' => '251', 'verified' => false]);
        $mockCredentials = new Request($loginInput);
        $mockUser_auth = $this->loginService->login($mockCredentials);

        $this->userModelRepo
            ->shouldReceive('findByEmail')
            ->with('teehee@gnomsayin.com')
            ->andReturn($mockUser);

        $this->userModelRepo
            ->shouldReceive('findAccessCode')
            ->with($mockUser, $input)
            ->andReturn("123123");

        $this->userModelRepo
            ->shouldReceive('completeRegistration')
            ->with($mockUser, $input)
            ->andReturn($mockUser);

        $this->loginService
            ->shouldReceive('login')
            ->with($mockCredentials)
            ->andReturn($mockUser_auth);

        $mockResponse = response()->json([
            'user' => $mockUser,
            'auth' => $mockUser_auth
        ]);

        $this->assertEquals($mockUser, $this->service->completeRegistration($input));
    }
}
