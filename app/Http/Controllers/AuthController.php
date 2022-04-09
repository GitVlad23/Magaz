<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('/auth/login');
    }


    public function registerForm()
    {
        return view('/auth/register');
    }


    public function login_process(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required'
        ]);

        if(@auth('web')->attempt($data))
        {
            return redirect()->route('main');
        }

        return redirect()->route('loginForm', compact('user'))->withErrors(['Email' => 'User doesnt exist or youre entered data incorrectly!']);
    }


    public function register_process(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if($user)
        {
            auth('web')->login($user);
        }

        return redirect()->route('main', compact('user'));
    }


    public function logout()
    {
        auth('web')->logout();

        return redirect()->route('main');
    }
}