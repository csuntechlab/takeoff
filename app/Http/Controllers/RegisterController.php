<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\RegisterContract;
use Validator;

class RegisterController extends Controller
{
    protected $registerRetriever;

    public function __construct(RegisterContract $registerContract)
    {
        $this->registerRetriever = $registerContract;
    }

    //ADMIN LEVEL ACCESS
    public function registerStudentEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
        $data = ['email' => $request->email];
        return $this->registerRetriever->registerUserEmail($data, "student");
    }

    public function registerAdminEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
        $data = ['email' => $request->email];
        return $this->registerRetriever->registerUserEmail($data, "admin");
    }

    //USER LEVEL ACCESS
    public function completeRegistration(Request $request)
    {
        // validate access code and email here

        $data = ['name' => $request->name, 'email' => $request->email, 'password' => $request->password, 'accessCode' => $request->accessCode];
        return $this->registerRetriever->completeRegistration($data);
    }
}
