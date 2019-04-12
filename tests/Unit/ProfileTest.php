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

        $request = Request::create('/store', 'POST',[
            'user_id'=> '3',
            'major'=> 'comp sci',
            'units'=> '50',
            'grad_date' => '2019',
            'college'=>'health',
            'bio'=> 'hi',
            'research' => 'this',
            'fun_facts'=>'is a',
            'academic_interest' => 'test'
        ]);

        $controller = new ProfileController($this->retriever);

        $this->retriever
            ->shouldReceive('store')
            ->with($request)
            ->andReturn("Info is Stored");

        $response = $controller->store($request);

        $this->assertEquals( 201, $response->status());

    }
}
