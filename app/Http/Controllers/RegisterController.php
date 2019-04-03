<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\RegisterContract;

class RegisterController extends Controller
{
    protected $registerRetriever;

    public function __construct(RegisterContract $registerContract)
    {
        $this->registerRetriever = $registerContract;
    }

    public function register(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email|unique:users,email', 'password' => 'required|min:6|confirmed']);
        $data = ['name' => $request->name, 'email' => $request->email, 'password' => $request->password];
        return $this->registerRetriever->register($data);
    }
}
