<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use App\Models\UserInfo;
use Illuminate\Support\Str;

class UserInfoModelRepository implements UserInfoModelRepositoryInterface
{
    public function searchUser($usersname)
    {
        $usersname = $usersname['name'];
        $firstname = Str::before($usersname , ' ');
        $lastname = Str::after($usersname , ' ');

        $user = UserInfo::where('first_name', $firstname)
            ->where('last_name', $lastname)
            ->orWhere('first_name', $usersname)
            ->orWhere('last_name', $usersname)
            ->get();

        if ($user == '[]'){
            return "User could not be found or does not exist";
        }
        return $user;
    }

    public function getAllStudents()
    {
        $students = UserInfo::all();
        return $students;
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
