<?php
namespace Tests\Feature;

use Tests\TestCase;
use Mockery;
use App\User;
use App\Models\RegistrationAccessToken;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use Illuminate\Foundation\Testing\WithFaker;
use App\Services\RegisterService;

class RegisterServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $userModelRepo;

    public function setUp()
    {
        parent::setUp();
        $this->userModelRepo = Mockery::spy(UserModelRepositoryInterface::class);
        $this->service = new RegisterService($this->userModelRepo);
    }

    /**
     * @test
     * @group noFramework
     */
    public function register_service_returns_completed_response()
    {
        $input = [
            "name" => "tes3t@email.com",
            "email" => "tes3t@email.com",
            "password" => "tes3t@email.com",
            "password_confirmation" => "tes3t@email.com"
        ];

        $mockUser = new User(['user_id' => '251']);
        $mockAccessToken = new RegistrationAccessToken([
            'user_id' => '251',
            'access_code' => '123123123'
        ]);

        $this->userModelRepo
            ->shouldReceive('findByEmail')
            ->with("tes3t@email.com")
            ->once()
            ->andReturn(null);

        $this->userModelRepo
            ->shouldReceive('create')
            ->with($input)
            ->once()
            ->andReturn($mockUser);

        $this->userModelRepo
            ->shouldReceive('generateAccessCode')
            ->once();

        // dd($this->service->register($input));

        $this->assertEquals($mockUser, $this->service->register($input));
        // $response = $this->service->register($input);

        // $this->assertArrayHasKey('name', $response);
        // $this->assertArrayHasKey('email', $response);

    }
}
