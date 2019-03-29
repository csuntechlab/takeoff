<?php
namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserProfile;
use App\Contracts\RegisterContract;
use Illuminate\Support\Facades\DB;
use function Opis\Closure\unserialize;
use function Opis\Closure\serialize;


class RegisterService implements RegisterContract
{
    public function register($request)
    {
        try {
            $name = (string)$request['name'];
            $email = (string)$request['email'];
            $password = (string)$request['password'];
        } catch (\Exception $e) {
            return ['message_error' => 'User was not successfully created.'];
        }

        //TODO: add organization destinction
        $user = DB::transaction(function() use ($name, $email, $password)
        {
           return User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);

        });

        return $user;
    }
}
