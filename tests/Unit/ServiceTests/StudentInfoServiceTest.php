<?php

namespace tests\Unit\ServiceTests;

use App\Models\StudentInfo;
use App\Services\StudentInfoService;
use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Mockery;
use Tests\TestCase;

class StudentInfoServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $studentInfoModelRepo;

    public function setUp(){
        parent::setUp();
        $this->studentInfoModelRepo = Mockery::spy(StudentInfoRepositoryInterface::class);
        $this->service = new StudentInfoService($this->studentInfoModelRepo);
    }

    /**
     * @test
     * @group noFramework
     */
    public function get_list_of_students_based_on_grad_date(){
        $input = ["graddate" => "Spring 2019"];

        $mockMajor = new StudentInfo(['graddate' => 'Spring 2019']);

        $this->studentInfoModelRepo
            ->shouldReceive('getStudentsByGradDate')
            ->with("graddate")
            ->once()
            ->andReturn(null);

        $this->assertEquals($mockMajor, $this->service->getStudentsByGradDate($input));
    }
}