<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use App\Models\UserInfo;

class UserInfoModelRepository implements UserInfoModelRepositoryInterface
{
    public function searchUser($usersname)
    {
        $user = UserInfo::where('first_name', $usersname)
            ->orWhere('last_name', $usersname)
            ->get();
        return $user;
    }

    public function getStudentsByGradDate($graddate)
    {
        $students = UserInfo::where('grad_date', $graddate)->get();
        return $students;
    }

    public function getStudentsByCollege($collegename)
    {
        $students = UserInfo::where('college', $collegename)->get();
        return $students;
    }

    public function getStudentsByMajor($majorname)
    {
        $students = UserInfo::where('major', $majorname)->get();
        return $students;
    }

}
