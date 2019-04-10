<?php
namespace App\Services;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;
use App\Models\StudentInfo;
use App\Contracts\StudentInfoContract;
use Validator;


class StudentInfoService implements StudentInfoContract
{
    protected $studentInfoModelRepo;

    public function __construct(StudentInfoRepositoryInterface $studentInfoModelRepo){
        $this->studentInfoModelRepo = $studentInfoModelRepo;
    }

    public function getStudentsByGradDate($graddate)
    {
        return $this->studentInfoModelRepo->getStudentsByGradDate($graddate);
    }

    public function getStudentsByCollege($collegename)
    {
        return $this->studentInfoModelRepo->getStudentsByCollege($collegename);
    }

    public function getStudentsByMajor($majorname)
    {
        return $this->studentInfoModelRepo->getStudentsByMajor($majorname);
    }

    public function store($data)
    {
        return StudentInfo::create([
            'user_id' =>  "1",
            'major' => $data->major,
            'units' => $data->units,
            'grad_date' => $data->grad_date,
            'college' => $data->college,
            'bio' => $data->bio,
            'research' => $data->research,
            'fun_facts' => $data->fun_facts,
            'academic_interest' => $data->academic_interest
        ]);
    }
}
