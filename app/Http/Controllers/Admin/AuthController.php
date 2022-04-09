<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('/admin/login');
    }


    public function login_process(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string',
            'password' => 'required'
        ]);

        if(@auth('admin')->attempt($data))
        {
            return redirect('/admin/orders/index');
        }

        return redirect()->route('admin_login')->withErrors(['Email' => 'User doesnt exist or youre entered data incorrectly!']);
    }


    public function logout()
    {
        auth('admin')->logout();

        return redirect()->route('main');
    }
}
