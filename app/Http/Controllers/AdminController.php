<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mail;
use App\Mail\InviteStudent;
use App\Contracts\StudentInfoContract;

class AdminController extends BaseController
{

    public function __construct(StudentInfoContract $studentinfoContract)
    {
        $this->studentinfoRetriever = $studentinfoContract;
    }

    public function sendInvite($studentemail)
    {
        Mail::to($studentemail)->send(new InviteStudent($studentemail));

        return "email has been sent";
    }

    public function getStudentsByCollege($collegename)
    {
        return $this->studentinfoRetriever->getStudentsByCollege($collegename);
    }
}
