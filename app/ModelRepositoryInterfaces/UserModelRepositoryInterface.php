<?php

declare(strict_types=1);
namespace App\ModelRepositoryInterfaces;

use App\Models\User;

interface UserModelRepositoryInterface
{
    public function registerStudentEmail($data);
    public function completeRegistration(User $user, $data);
    public function generateAccessCode(User $user);
    public function findAccessCode(User $user, $data);
    public function findByEmail($email);
}
