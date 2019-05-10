<?php

namespace App\ModelRepositories;

use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use App\Models\UserInfo;
use App\Models\User;
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

    public function sortUsersbyFirstName($order) {
        if ($order == 1){

          $users = User::with(['roles' => function ($query)
            {
                $query->where('role', 'is', 'admin');

            }])
//                ->where('role', 'student')
                ->get();

          $users = User::with('roles')->get();
            //dd($users);
          $admins = $users->filter(function ($user) {
              if ($user->roles()->first()->role == 'student')
                  return $user->studentInfo;
          });
//            $users = User::with(['role' => function ($query) {
//                $query->where('role', 'is', '%student%');
//            }])->get();

//            $users =  User::first()->studentInfo;


            // return $this->checkifStudent($users);


//            return $users->studentInfo()->all();
//                ->where('archive', false)
//                ->orderBy('first_name', 'asc')
                //->get();
//            return $users;
//            foreach ($users as $user) {
//                $students = $this->checkifStudent($user);
//            }
            return $admins;
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
