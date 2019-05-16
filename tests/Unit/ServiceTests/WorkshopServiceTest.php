<?php

namespace tests\Unit\ServiceTests;

use App\Models\Workshop;
use App\Models\User;
use App\Models\UserInfo;
use App\Services\WorkshopService;
use App\ModelRepositoryInterfaces\WorkshopModelRepositoryInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Mockery;
use Tests\TestCase;

class WorkshopServiceTest extends TestCase
{
    use DatabaseMigrations;

    protected $workshopModelRepo;

    public function setUp(){
        parent::setUp();
        $this->workshopModelRepo = Mockery::spy(WorkshopModelRepositoryInterface::class);
        $this->service = new WorkshopService($this->workshopModelRepo);
    }

    /**
     * @test
     * @group noFramework
     */
    public function createWorkshop_returns_created_workshop(){
        $mockData = ['workshop_name' => 'asdasd',
        'workshop_description' => 'asdasdasd',
        'instructor' => 'Mikkal',
        'about_instructor' => 'he cool',
        'assignment_info' => 'asdasd',
        'date' => '03/03/9999'];

        $mockWorkshop = new Workshop();

        $this->workshopModelRepo
        ->shouldReceive('createWorkshop')
        ->with($mockData)
        ->once()
        ->andReturn($mockWorkshop);

        $this->assertEquals($mockWorkshop, $this->service->createWorkshop($mockData));
    }

    /**
     * @test
     * @group noFramework
     */
    public function getWorkshop_returns_workshop() {
        $mockId = '1';

        $mockWorkshop = new Workshop([
            'id' => $mockId,
            'workshop_name' => 'asdasd',
            'workshop_description' => 'asdasdasd',
            'instructor' => 'Mikkal',
            'about_instructor' => 'he cool',
            'assignment_info' => 'asdasd',
            'date' => '03/03/9999'
        ]);

        $mockWorkshop->save();

        $this->assertEquals($mockWorkshop->toArray(), $this->service->getWorkshop($mockId));
    }

     /**
     * @test
     * @group noFramework
     */
    public function getAttendance_returns_an_array() {
        $mockId = '1';
        $mockUser = new User(['id' => '1', 'first_name' => 'mikkal', 'last_name' => 'mcnulty', 'user_id' => '1', 'email' => 'test@test.com']);
        $mockUserInfo = new UserInfo(['id' => '1',
         'first_name' => 'mikkal',
         'last_name' => 'mcnulty',
         'grad_date' => 'june',
         'college' => 'Computer Science',
         'bio' => 'hi there',
         'research' => 'assa',
         'fun_facts' => 'asfsdsadf',
         'academic_interest' => 'asfds',
         'title' => 'asdasd', 'user_id' => '1',
         'major' => 'test',
         'archive' => '0',
         'email' => 'test@test.com']);

        $mockWorkshop = new Workshop([
            'id' => $mockId,
            'workshop_name' => 'asdasd',
            'workshop_description' => 'asdasdasd',
            'instructor' => 'Mikkal',
            'about_instructor' => 'he cool',
            'assignment_info' => 'asdasd',
            'date' => '03/03/9999'
        ]);

        $mockUserInfo->save();
        $mockUser->save();
        $mockWorkshop->save();
        $mockWorkshop->users()->attach($mockUser->id);
        $mockWorkshop->save();

        // dd($mockUserInfo);
        // dd($this->service->getAttendance(1)[0]);
        $this->assertIsArray($this->service->getAttendance(1));
    }
}
