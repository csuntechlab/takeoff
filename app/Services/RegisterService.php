<?php
namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserProfile;
use App\Contracts\RegisterContract;
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
        try {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);
        } catch (Illuminate\Database\QueryException $e) {
            return ['message_error' => 'User was not successfully created.'];
        }
        return $user;
    }
}
