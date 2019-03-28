<?php
namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserProfile;
use App\Models\RegistrationAccessToken;
use App\Contracts\RegisterContract;
use Illuminate\Support\Facades\DB;
use App\Services\AdminService;
use function Opis\Closure\unserialize;
use function Opis\Closure\serialize;


class RegisterService implements RegisterContract
{
    //TODO: create repository that handles all of the database transactions
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
                'verified' => false
            ]);

        });

        $this->generateAccessCode($user);

        return $user;
    }

    //generate the access code and store in database with relation to the user
    private function generateAccessCode(User $user) {
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
