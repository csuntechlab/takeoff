<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contracts\LoginContract;
use App\User;

class LoginController extends Controller
{

    private $loginRetriever;

    public function __construct(LoginContract $loginContract)
    {
        $this->loginRetriever = $loginContract;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        return $this->loginRetriever->login($request);
    }

    public function logout(Request $request)
    {
        return $this->loginRetriever->logout($request);
    }
}
