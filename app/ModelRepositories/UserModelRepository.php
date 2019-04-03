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
    public function create($request) {
        return DB::transaction(function() use ($request)
        {
            return User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'verified' => false
            ]);
        });
    }

    public function findByEmail($email) {
        $user = DB::table('users')
            ->where('email', $email)
            ->first();

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
}
