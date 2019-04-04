<?php
namespace App\Contracts;

interface RegisterContract
{
    public function registerStudentEmail($data);
    public function completeRegistration($data);
}
