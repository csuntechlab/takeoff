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

    public function getStudentsByCollege($collegename)
    {
        $students = StudentInfo::where('college',$collegename)->get();
        return $students;
    }

    public function getStudentsByMajor($majorname)
    {
        $students = StudentInfo::where('major',$majorname)->get();
        return $students;
    }

}
