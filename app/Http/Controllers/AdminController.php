<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mail;
use App\Mail\InviteStudent;

class AdminController extends BaseController
{
    private $adminRetriever;

    public function __construct(AdminContract $adminContract)
    {
        $this->adminRetriever = $adminContract;
    }

    public static function sendInvite($studentemail)
    {
        Mail::to($studentemail)->send(new InviteStudent($studentemail));

        return "email has been sent";
    }
}
