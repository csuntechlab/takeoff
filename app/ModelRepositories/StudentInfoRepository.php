<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;

use App\Models\StudentInfo;

class StudentInfoRepository implements StudentInfoRepositoryInterface
{
    public function getStudentsByGradDate($graddate)
    {
        $students = StudentInfo::where('grad_date', $graddate)->get();

        return $students;
    }

}