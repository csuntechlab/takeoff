<?php

namespace tests\Unit\ServiceTests;

use App\Models\UserInfo;
use App\Services\UserInfoService;
use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Mockery;
use Tests\TestCase;

class UserInfoServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $userInfoModelRepo;

    public function setUp(){
        parent::setUp();
        $this->userInfoModelRepo = Mockery::spy(UserInfoModelRepositoryInterface::class);
        $this->service = new UserInfoService($this->userInfoModelRepo);
    }

    /**
     * @test
     * @group noFramework
     */
    public function get_list_of_students_based_on_major(){
        $mockMajor = new UserInfo(['major' => 'test']);

        $this->userInfoModelRepo
        ->shouldReceive('getStudentsByMajor')
        ->with("test")
        ->once()
        ->andReturn($mockMajor);

        $this->assertEquals($mockMajor, $this->service->getStudentsByMajor("test"));
    }

    /**
     * @test
     * @group noFramework
     */
    public function get_list_of_students_based_on_grad_date() {
        $mockGradDate = new UserInfo(['grad_date' => 'Spring 2019']);

        $this->userInfoModelRepo
            ->shouldReceive('getStudentsByGradDate')
            ->with("Spring 2019")
            ->once()
            ->andReturn($mockGradDate);
        $this->assertEquals($mockGradDate, $this->service->getStudentsByGradDate("Spring 2019"));
    }

    /**
     * @test
     * @group noFramework
     */
    public function get_list_of_students_based_on_college() {
        $mockCollege = new UserInfo(['college' => 'test']);

        $this->userInfoModelRepo
            ->shouldReceive('getStudentsByCollege')
            ->with("test")
            ->once()
            ->andReturn($mockCollege);

        $this->assertEquals($mockCollege, $this->service->getStudentsByCollege("test"));
    }
}
