<?php
namespace App\Contracts;

interface AdminContract
{
    public function createAdminUserInfo($validatedData);
    public static function sendInvite($request);
}
