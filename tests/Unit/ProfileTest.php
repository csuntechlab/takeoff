<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Contracts\StudentInfoContract;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Mockery;

class ProfileTest extends TestCase
{
    public $retriever;

    public function setUp()
    {
        parent::setUp();
        $this->retriever = Mockery::spy(StudentInfoContract::class);
    }

    /**
     * @test
     */
    public function store_studentinfo(){

        $request = Request::create('/store', 'POST',[
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
        $this->assertEquals("Info is Stored", $response);

    }
}
