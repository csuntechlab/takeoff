<?php
namespace App\Services;

use App\User;
use App\Models\UserProfile;
use App\Models\RegistrationAccessToken;
use App\Contracts\RegisterContract;
use App\Services\AdminService;
use Illuminate\Support\Facades\DB;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use function Opis\Closure\unserialize;
use function Opis\Closure\serialize;


class RegisterService implements RegisterContract
{
    protected $userModelRepo;

    public function __construct(UserModelRepositoryInterface $userModelRepo)
    {
        $this->userModelRepo = $userModelRepo;
    }
    //TODO: create repository that handles all of the database transactions
    public function register($data)
    {
        try {
            $name = (string)$data['name'];
            $email = (string)$data['email'];
            $password = (string)$data['password'];
        } catch (\Exception $e) {
            return ['message_error' => 'User was not successfully created.'];
        }

        $user = $this->userModelRepo->findByEmail($data['email']);
        if ($user !== null) {
            return ['message_error' => 'User has already been created.'];
        }

        $user = $this->userModelRepo->create($data);
        $this->userModelRepo->generateAccessCode($user);

        return $user;
    }

    //generate the access code and store in database with relation to the user
    // private function generateAccessCode(User $user) {
    //     DB::transaction(function() use ($user)
    //     {
    //         $randomCode = mt_rand(100000,999999);
    //         RegistrationAccessToken::create([
    //             'access_code' => $randomCode,
    //             'user_id' => $user->id,
    //         ]);
    //     });
    // }
}
