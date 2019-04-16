<?php

namespace Tests\Unit\AuthTests\RegisterTests;

use Tests\TestCase;
use Mockery;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Http\Controllers\RegisterController;
use App\Contracts\RegisterContract;

class RegisterControllerTest extends TestCase
{
    use DatabaseMigrations;
    private $controller;
    private $retriever;

    public function setUp()
    {
        parent::setUp();
        $this->retriever = Mockery::mock(RegisterContract::class);
        $this->controller = new RegisterController($this->retriever);
    }


    /**
     * @test
     * @group noFramework
     */
    public function registerStudentEmail_controller_returns_success()
    {
        $input = [
            "email" => "tes3t@email.com",
        ];

        $request = new Request($input);

        $expectedResponse = [];

        $this->retriever
            ->shouldReceive('registerStudentEmail')
            ->with($request)
            ->once()->andReturn($expectedResponse);

        $response = $this->retriever->registerStudentEmail($request);

        $this->assertEquals($expectedResponse, $response);
    }

    /**
     * @test
     * @group noFramework
     */
    public function test_registerStudentEmail_http_call_ok()
    {
        $input = [
            "email" => "tes3t@email.com",
        ];

        $response = $this->json('POST', "/api/auth/invite", $input);
        $response = $response->getOriginalContent();
        $response = json_encode($response);
        $expectedResponse = [
            "email" => "tes3t@email.com",
        ];
        $expectedResponse = json_encode($expectedResponse);
        $this->assertEquals($response, $expectedResponse);
    }
}
