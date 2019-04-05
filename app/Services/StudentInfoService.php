<?php
namespace App\Services;

use App\Models\StudentInfo;
use App\Contracts\StudentInfoContract;
use Validator;

class StudentInfoService implements StudentInfoContract {

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