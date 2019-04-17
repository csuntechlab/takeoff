<?php
namespace App\Services;

use Mail;
use App\Mail\InviteStudent;
use App\Contracts\AdminContract;
use App\Models\UserInfo;

class AdminService implements AdminContract
{
    public static function sendInvite($studentEmail)
    {
        Mail::to($studentEmail)->send(new InviteStudent($studentEmail));

        return "email has been sent";
    }

    public function createAdminUserInfo($data)
    {
        return UserInfo::create([
            'user_id' =>  $data->user_id,
            'title' =>  $data->title,
            'first_name'=> $data->first_name,
            'last_name'=> $data->last_name,
        ]);
    }
}
