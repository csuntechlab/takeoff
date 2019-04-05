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
    public function get_list_of_students_based_on_major(){
        $input = ["majorname" => "test"];

        $mockMajor = new StudentInfo(['major' => 'test']);
        dd($mockMajor);
        $this->studentInfoModelRepo
            ->shouldReceive('getStudentsByMajor')
            ->with("majorname")
            ->once()
            ->andReturn(null);

        $this->assertEquals($mockMajor, $this->service->getStudentsByMajor($input));
    }
}