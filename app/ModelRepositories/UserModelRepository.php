<?php

declare(strict_types=1);
namespace App\ModelRepositories;

use Mail;
use App\Mail\InviteStudent;
use App\Models\User;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use App\Models\RegistrationAccessToken;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModelRepository implements UserModelRepositoryInterface
{
    public function registerUserEmail($data, $role) {
        return DB::transaction(function() use ($data, $role)
        {
            $user = User::create([
                'email' => $data['email'],
                'verified' => false
            ]);

            switch ($role)
            {
                case "student":
                    $user->roles()->attach(1);
                    break;
                case "admin":
                    $user->roles()->attach(2);
                    break;
            }

            return $user;
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

    public function sendEmail($user, $data){
        $accesscode = $this->findAccessCode($user, $data);
        Mail::to($data['email'])->send(new InviteStudent($data['email'], $accesscode));
        return true;
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

    public function deleteUser($userId) {
        $user = $this->findById($userId);
        $user->delete();
    }

    public function findById($userId) {
        $user = User::where('id', $userId)
            ->first();

        return $user;
    }

    public function findRole(User $user) {
        return $user->roles()->first()->role;
    }
}
