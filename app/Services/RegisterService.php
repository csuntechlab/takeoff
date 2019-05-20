<?php
namespace App\Services;

use Mail;
use App\Mail\InviteStudent;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Registration;
use App\Contracts\RegisterContract;
use App\Contracts\LoginContract;
use App\Services\AdminService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ModelRepositoryInterfaces\UserModelRepositoryInterface;
use Carbon\Carbon;
use function Opis\Closure\unserialize;
use function Opis\Closure\serialize;


class RegisterService implements RegisterContract
{
    protected $userModelRepo;
    protected $loginRetriever;

    public function __construct(UserModelRepositoryInterface $userModelRepo)
    {
        $this->userModelRepo = $userModelRepo;
        // $this->loginRetriever = $loginContract;
    }

    public function registerUserEmail($data, $role)
    {
        $user = $this->userModelRepo->findByEmail($data['email']);
        // Verify that user has not already been added by the admin
        if ($user !== null) {
            return ['message_error' => 'User has already been created.'];
        }
        $user = $this->userModelRepo->registerUserEmail($data, $role);
        // TODO: There needs to be added functionality for sending the access code through emails
        $this->userModelRepo->generateAccessCode($user);
        $this->userModelRepo->sendEmail($user, $data);

        return $user;
    }

    public function completeRegistration($data)
    {
        $user = $this->userModelRepo->findByEmail($data['email']);
        // Query user by email, if results are null,
        // the user has not yet been added
        // to the application by the admin
        if ($user === null) {
            return ['message_error' => 'User has not been verified by admin.'];
        }
        // Check whether or not the user has already
        // gone through the registration process
        // by checking the 'verified' flag
        if ($user->verified) {
            return ['message_error' => 'You have already completed registration'];
        }
        // Compare form request access code
        // to the actual access code sent by the admin
        $accessCode = $this->userModelRepo->findAccessCode($user, $data);
        if ($accessCode != $data['accessCode']) {
            return ['message_error' => 'Access code is not correct.'];
        }

        $user = $this->userModelRepo->completeRegistration($user, $data);

        // $input = [
        //     "email" => $data['email'],
        //     "password" => $data['password']
        // ];
        // $credentials = new Request($input);
        // $credentials->setMethod('POST');
        // $user_auth = $this->loginRetriever->login($credentials);
        return $user;
    }
}
