<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mail;
use App\Mail\InviteStudent;
use App\Contracts\StudentInfoContract;

class AdminController extends BaseController
{
    private $adminRetriever;

    public function __construct(StudentInfoContract $studentinfoContract, AdminContract $adminContract)
    {
        $this->studentinfoRetriever = $studentinfoContract;
        $this->adminRetriever = $adminContract;
    }


    public static function sendInvite($studentemail)
    {
        Mail::to($studentemail)->send(new InviteStudent($studentemail));

        return "email has been sent";
    }

    public function getStudentsByMajor($majorname)
    {
        return $this->studentinfoRetriever->getStudentsByMajor($majorname);
    }
}
