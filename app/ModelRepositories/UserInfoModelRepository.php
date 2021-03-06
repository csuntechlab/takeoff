<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use App\Models\UserInfo;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
            // return "User could not be found or does not exist";
            throw new ModelNotFoundException();
        }
        return $user;
    }

    public function getUserById($userId)
    {
        $user = UserInfo::where('user_id', $userId)
            ->get();

        if ($user == '[]'){
            throw new ModelNotFoundException();
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

    public function sortUsersbyFirstName($order) {
        if ($order == 1){
            return UserInfo::where('archive', false)
                ->orderBy('first_name', 'asc')
                ->get();
        }
        if ($order == 2){
            return UserInfo::where('archive', false)
                ->orderBy('first_name', 'desc')
                ->get();
        }
    }

    public function sortUsersbyLastName($order) {
        if ($order == 1){
            return UserInfo::where('archive', false)
                ->orderBy('last_name', 'asc')
                ->get();
        }
        if ($order == 2){
            return UserInfo::where('archive', false)
                ->orderBy('last_name', 'desc')
                ->get();
        }
    }
}
