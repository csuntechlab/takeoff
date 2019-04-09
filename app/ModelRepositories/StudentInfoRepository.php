<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;
use App\Models\StudentInfo;

class StudentInfoRepository implements StudentInfoRepositoryInterface
{
    public function getStudentsByMajor($majorname)
    {
        $students = StudentInfo::where('major',$majorname)->get();

        return $students;
    }

}