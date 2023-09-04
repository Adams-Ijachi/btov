<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

class UserAuthController extends Controller
{
    public function siginUp()
    {
        return view('components.signup');
    }

    public function siginIn()
    {
        return view('components.signin');
    }

    public function register(UserRegisterRequest  $request)
    {

        $user = User::create($request->validated());

        \Auth::login($user);

        return redirect()->route('home');
    }

    public function login(UserLoginRequest $request)
    {
        if(\Auth::attempt($request->validated())){
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials'
        ]);
    }



}
