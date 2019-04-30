<?php
namespace App\Services;

use App\ModelRepositoryInterfaces\WorkshopServiceModelRepositoryInterface;
use App\Models\Workshop;
use App\Contracts\WorkshopContract;
use Validator;


class WorkshopService implements WorkshopContract
{
    protected $workshopModelRepo;

    public function __construct(WorkshopServiceModelRepositoryInterface $workshopModelRepo){
        $this->workshopModelRepo = $workshopModelRepo;
    }

    public function createWorkshop($data){
        $workshop = $this->workshopModelRepo->createWorkshop($data);
        return $workshop;
    }
}
