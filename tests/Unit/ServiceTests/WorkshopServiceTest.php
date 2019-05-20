<?php

namespace tests\Unit\ServiceTests;

use App\Models\Workshop;
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
    public function editWorkshop_returns_success_message() {
        $mockData = ['workshop_name' => 'diff',
        'workshop_description' => 'diff',
        'instructor' => 'diff',
        'about_instructor' => 'diff',
        'assignment_info' => 'diff',
        'workshopId' => 1];


        $mockWorkshop = new Workshop([
            'id' => 1,
            'workshop_name' => 'asdasd',
            'workshop_description' => 'asdasdasd',
            'instructor' => 'Mikkal',
            'about_instructor' => 'he cool',
            'assignment_info' => 'asdasd',
            'date' => '03/03/9999'
        ]);

        $mockWorkshop->save();

        $expectedMessage = "Workshop #1 succesfully updated.";

        $this->assertEquals($expectedMessage,  $this->service->editWorkshop($mockData));
    }
}
