<?php

declare(strict_types=1);
namespace App\ModelRepositories;

use App\User;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use App\Models\RegistrationAccessToken;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModelRepository implements UserModelRepositoryInterface
{
    public function registerStudentEmail($data) {
        return DB::transaction(function() use ($data)
        {
            return User::create([
                'email' => $data['email'],
                'verified' => false
            ]);
        });
    }

    public function completeRegistration(User $user, $data) {
        $user->password = Hash::make($data['password']);
        $user->verified = true;
        $user->save();
        return $user;
    }

    public function generateAccessCode(User $user) {
        DB::transaction(function() use ($user)
        {
            $randomCode = mt_rand(100000,999999);
            RegistrationAccessToken::create([
                'access_code' => $randomCode,
                'user_id' => $user->id,
            ]);
        });
    }

    public function findAccessCode(User $user, $data) {
        $accessCode = $user->registrationAccessToken->toArray();
        return $accessCode['access_code'];
    }

    public function findByEmail($email) {
        $user = User::where('email', $email)
            ->first();

        return $user;
    }
}
