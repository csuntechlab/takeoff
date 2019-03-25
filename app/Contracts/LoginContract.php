<?php
namespace App\Contracts;

interface LoginContract
{
    public function login($request);

    public function logout($request);
}
