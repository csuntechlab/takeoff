<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Contracts\UserInfoContract;
use App\Contracts\AdminContract;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Mockery;

class AdminTest extends TestCase
{
    public $retrieverUserInfo;
    public $retrieverAdmin;

    public function setUp()
    {
        parent::setUp();
        $this->retrieverUserInfo = Mockery::spy(UserInfoContract::class);
        $this->retrieverAdmin = Mockery::spy(AdminContract::class);
    }

    /**
     * @test
     */
    public function store_admin_info()
    {
        $request = Request::create('/admin/store', 'POST',[
            'first_name' => 'test',
            'last_name' => 'test',
            'title' => 'director',
        ]);

        $controller = new AdminController($this->retrieverUserInfo,$this->retrieverAdmin);

        $this->retrieverAdmin
            ->shouldReceive('createAdminUserInfo')
            ->with($request)
            ->andReturn("Info is Stored");

        $response = $controller->createAdminUserInfo($request);

        $this->assertEquals( 201, $response->status());

    }

    /**
     * @test
     */
    public function search_for_user_returns_that_user()
    {
        $input = [
            "name" => "test",
        ];

        $request = new Request($input);

        $controller = new AdminController($this->retrieverUserInfo,$this->retrieverAdmin);

        $this->retrieverUserInfo
            ->shouldReceive('searchUser')
            ->with($input)
            ->andReturn("User is found");

        $response = $controller->searchUser($request);

        $this->assertEquals( "User is found", $response);

    }
}
