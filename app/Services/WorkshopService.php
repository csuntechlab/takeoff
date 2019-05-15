<?php
namespace App\Services;

use App\ModelRepositoryInterfaces\WorkshopModelRepositoryInterface;
use App\Models\Workshop;
use App\Contracts\WorkshopContract;
use Validator;


class WorkshopService implements WorkshopContract
{
    protected $workshopModelRepo;

    public function __construct(WorkshopModelRepositoryInterface $workshopModelRepo){
        $this->workshopModelRepo = $workshopModelRepo;
    }

    public function createWorkshop($data){
        $workshop = $this->workshopModelRepo->createWorkshop($data);
        return $workshop;
    }

    public function getAllWorkshops(){
        return $this->workshopModelRepo->getAllWorkshops();
    }

    public function getWorkshop($id) {

        $workshop = Workshop::where('id', $id)->first();
        return $workshop->toArray();
    }
}
