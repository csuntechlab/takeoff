<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;

use Illuminate\Support\Facades\DB;

class StudentInfoRepository implements StudentInfoRepositoryInterface
{
    public function getStudentsByCollege($collegename)
    {
        $students = DB::table('student_info')
            ->where('college', $collegename)
            ->get();  //TODO This method should take into account current students
        return $students;
    }

}