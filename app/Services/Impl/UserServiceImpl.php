<?php

namespace App\Services\Impl;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;

class UserServiceImpl implements UserService
{
    private array $user = [
        "Dicky" => "rahasia"
    ];

    function register(string $name, string $email, string $password): bool
    {
        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        $user->save();
        if ($user) {
            return true;
        } else {
            return false;
        }
    }

    function login(string $user, string $password): bool
    {
        if (!isset($this->user[$user])) {
            return false;
        }
        $correctPassword = $this->user[$user];
        return $password == $correctPassword;
        // if ($password == $correctPassword) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
}
