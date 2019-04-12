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

    public function storeAdmin($data)
    {
        return UserInfo::create([
            'user_id' =>  "1",
            'title' =>  $data->title,
            'first_name'=> $data->first_name,
            'last_name'=> $data->last_name,
        ]);
    }
}
