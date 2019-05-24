<?php
namespace App\Services;

use App\ModelRepositoryInterfaces\WorkshopModelRepositoryInterface;
use App\Models\Workshop;
use App\Models\UserInfo;
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

    public function getAttendance($id) {
        $workshop = Workshop::where('id', $id)->first();
        $studentIds = $workshop->users()->get();
        $students = [];
        foreach($studentIds as $studentId) {
            $student = UserInfo::where('id', $studentId->pivot->user_id)->first();
            array_push($students, $student);
        }
        return $students;
    }

    public function editWorkshop($data) {
        $id = Workshop::where('id', $data['workshopId'])->update([
            'instructor' => $data['instructor'],
            'about_instructor' => $data['about_instructor'],
            'assignment_info' => $data['assignment_info'],
            'workshop_name' => $data['workshop_name'],
            'workshop_description' => $data['workshop_description'],
        ]);
        return sprintf("Workshop #%s succesfully updated.",$id);
    }
}
