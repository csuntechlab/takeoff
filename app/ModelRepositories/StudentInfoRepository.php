<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;

use Illuminate\Support\Facades\DB;

class StudentInfoRepository implements StudentInfoRepositoryInterface
{
    public function getStudentsByGradDate($graddate)
    {
        $students = DB::table('student_info')
            ->where('grad_date', $graddate)
            ->all();  //TO DO This method should take into account current students
        return $students;
    }

}