<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mail;
use App\Mail\InviteStudent;
use App\Contracts\StudentInfoContract;
use App\Contracts\AdminContract;

class AdminController extends BaseController
{
  
  private $adminRetriever;

    public function __construct(
  StudentInfoContract $studentinfoContract, 
  AdminContract $adminContract)
    {
        $this->studentinfoRetriever = $studentinfoContract;
        $this->adminRetriever = $adminContract;
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
