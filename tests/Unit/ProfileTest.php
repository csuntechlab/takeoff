<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Contracts\UserInfoContract;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Mockery;

class ProfileTest extends TestCase
{
    public $retriever;

    public function setUp()
    {
        parent::setUp();
        $this->retriever = Mockery::spy(UserInfoContract::class);
    }

    /**
     * @test
     */
    public function store_user_info(){

        $request = Request::create('api/profile/store', 'POST',[
            'userId'=> '3',
            'firstName'=> 'test',
            'lastName'=> 'test',
            'major'=> 'comp sci',
            'expectedGrad' => '2019',
            'college'=>'health',
            'biography'=> 'hi',
            'research' => 'this',
            'funFacts'=>'is a',
            'academicInterests' => 'test'
        ]);

        $controller = new ProfileController($this->retriever);

        $this->retriever
            ->shouldReceive('createStudentUserInfo')
            ->with($request)
            ->andReturn("Info is Stored");

        $response = $controller->createStudentUserInfo($request);

        $this->assertEquals( 201, $response->status());

    }
}
