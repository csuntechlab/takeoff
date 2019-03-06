<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mail;
use App\Mail\InviteStudent;

class AdminController extends BaseController
{
    public function sendInvite($studentemail)
    {
        //$studentemail= "hi@email.com";

        Mail::to($studentemail)->send(new InviteStudent($studentemail));

        return "email has been sent";

    }

    public function test($test){
        return $test;
    }
}
