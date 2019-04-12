<?php
namespace App\Contracts;

interface AdminContract
{
    public function storeAdmin($validatedData);
    public static function sendInvite($request);
}
