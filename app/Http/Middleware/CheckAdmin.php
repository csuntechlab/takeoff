<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = $request->userId;

        $user = User::where('id', $userId)
        ->first();

        if ($user->roles()->first()->role != 'admin') {
            throw new \Exception("Unauthorized");
        }
        return $next($request);
    }
}
