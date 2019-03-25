<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Services\RegisterService;

class RegisterServiceTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->service = new RegisterService();
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

        $response = $this->service->register($input);

        $this->assertArrayHasKey('name', $response);
        $this->assertArrayHasKey('email', $response);

    }
}
