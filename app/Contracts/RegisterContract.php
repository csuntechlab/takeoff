<?php
namespace App\Contracts;

interface RegisterContract
{
    public function registerUserEmail($data, $role);
    public function completeRegistration($data);
}
