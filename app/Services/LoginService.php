<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Contracts\LoginContract;
use Carbon\Carbon;

class LoginService implements LoginContract
{
    public function login($request)
    {
        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

            $user = $request->user();
            $tokenResult = $user->createToken('takeoff');
            $token = $tokenResult->token;

            if ($request->remember_me)
                $token->expires_at = Carbon::now()->addWeeks(1);
            $token->save();
            return response()->json([
                'user_id' => $user->id,
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
            ]);
    }

    public function logout($request)
    {
        if (Auth::check()) {
            Auth::user()->UserAuthTokens()->delete();

            return response()->json([
                'message' => 'Successfully logged out'
            ], 204);
        }
    }
}
