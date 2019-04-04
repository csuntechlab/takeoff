<?php

declare(strict_types=1);
namespace App\ModelRepositoryInterfaces;

use App\User;

interface UserModelRepositoryInterface
{
    public function registerStudentEmail($data);
    public function completeRegistration($data);
    public function findByEmail($email);
    public function generateAccessCode(User $user);
}
