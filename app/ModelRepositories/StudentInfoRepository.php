<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;

use Illuminate\Support\Facades\DB;

class StudentInfoRepository implements StudentInfoRepositoryInterface
{
    public function getStudentsByMajor($majorname)
    {
        $students = DB::table('student_info')
            ->where('major', $majorname)
            ->get();  //TO DO This method should take into account current students
        return $students;
    }

}