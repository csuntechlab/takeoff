<?php

namespace tests\Unit\ServiceTests;

use App\Services\AdminService;
use App\Models\User;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Mockery;
use Tests\TestCase;

class AdminServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $userModelRepo;

    public function setUp() {
        parent::setUp();
        $this->userModelRepo = Mockery::spy(UserModelRepositoryInterface::class);
        $this->service = new AdminService($this->userModelRepo);
    }

    /**
     * @test
     * @group noFramework
     */
    public function deleteStudent_removes_user_from_table() {
        $mockUser = new User(['id' => '1', 'email' => 'test@gmail.com']);
        $this->userModelRepo
            ->shouldReceive('findById')
            ->with('1')
            ->once()
            ->andReturn($mockUser);

        $this->userModelRepo
            ->shouldReceive('findRole')
            ->with($mockUser)
            ->once()
            ->andReturn("student");

        $this->userModelRepo
            ->shouldReceive('deleteUser')
            ->with('1')
            ->once();

        $resp = $this->service->deleteStudent("1");
        $this->assertEquals("Student Succesfully Deleted", $resp);
    }
}
