<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userSercvice)
    {
        $this->userService = $userSercvice;
    }

    public function index()
    {
        $data['title'] = 'KARATE KID';
        return view('user.welcome', $data);
    }
    public function login()
    {
        $data['title'] = 'KARATE KID';
        return view('user.login', $data);
    }
    public function regis()
    {
        $data['title'] = 'Register';
        return view('user.regis', $data);
    }

    public function doRegis(PostRequest $request)
    {
        $regis = $this->userService->register($request->name, $request->email, $request->pwd);
        if ($regis == true) {
            return redirect('/')->with('success', 'Data Added Successfully.');
        } else {
            return "SALAH";
        }
    }
}
