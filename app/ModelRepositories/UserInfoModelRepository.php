<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use App\Models\UserInfo;

class UserInfoModelRepository implements UserInfoModelRepositoryInterface
{
    public function getAllStudents()
    {
        $students = UserInfo::all();
        return $students;
    }
    public function getStudentsByGradDate($graddate)
    {
        $students = UserInfo::where('archive', false)
            ->where('grad_date', $graddate)
            ->get();
        return $students;
    }

    public function getStudentsByCollege($collegename)
    {
        $students = UserInfo::where('archive', false)
            ->where('college', $collegename)
            ->get();
        return $students;
    }

    public function getStudentsByMajor($majorname)
    {
        $students = UserInfo::where('archive', false)
            ->where('major', $majorname)
            ->get();
        return $students;
    }

}
