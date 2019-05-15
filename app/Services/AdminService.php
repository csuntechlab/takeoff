<?php
namespace App\Services;

use Mail;
use App\Mail\InviteStudent;
use App\Contracts\AdminContract;
use App\Models\UserInfo;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;

class AdminService implements AdminContract
{
    protected $userModelRepo;

    public function __construct(UserModelRepositoryInterface $userModelRepo){
        $this->userModelRepo = $userModelRepo;
    }

    public static function sendInvite($studentEmail)
    {
        Mail::to($studentEmail)->send(new InviteStudent($studentEmail));

        return "email has been sent";
    }

    public function createAdminUserInfo($data)
    {
        return UserInfo::create([
            'user_id' =>  $data->userId,
            'title' =>  $data->title,
            'first_name'=> $data->firstName,
            'last_name'=> $data->lastName,
        ]);
    }

    public function deleteStudent($userId)
    {
        $student = $this->userModelRepo->findById($userId);
        if ($student == null) {
            return ['message_error' => 'Could not find the user with the provided ID.'];
        }

        $userRole = $this->userModelRepo->findRole($student);

        if ($userRole != "student") {
            return ['message_error' => 'The requested user is not a student, cannot delete'];
        }

        $this->userModelRepo->deleteUser($userId);

        return "Student Succesfully Deleted";
    }
}
