<?php
namespace App\Services;

use Mail;
use App\Mail\InviteStudent;
use App\Contracts\AdminContract;

class AdminService implements AdminContract
{
    public static function sendInvite($studentEmail)
    {
        Mail::to($studentEmail)->send(new InviteStudent($studentEmail));

        return "email has been sent";
    }
}
