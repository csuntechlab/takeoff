<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;
use App\Models\StudentInfo;

use Illuminate\Support\Facades\DB;

class StudentInfoRepository implements StudentInfoRepositoryInterface
{
    public function getStudentsByCollege($collegename)
    {
        $students = StudentInfo::where('college',$collegename)->get();

        return $students;
    }

}