<?php
namespace App\Services;

use Mail;
use App\Mail\InviteStudent;
use App\Contracts\AdminContract;
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

    public function deleteStudent($userId)
    {
        $student = $this->userModelRepo->findById($userId);
        if ($student == null) {
            return ['message_error' => 'Could not find the user with the provided ID.'];
        }

        dd($student->roles->toArray());

        if ($student->roles->toArray()[0]['role'] != "student") {
            return ['message_error' => 'The requested user is not a student, cannot delete'];
        }

        $this->userModelRepo->deleteUser($userId);

        return "Student Succesfully Deleted";
    }
}
