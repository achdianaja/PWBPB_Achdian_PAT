<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('home');
        }else{
            return view('auth.login');
        }
    }

    public function postLogin(Request $request)
    {
        dd($request->all());
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('index');
        }else{
            return back()->withErrors([
                'email' => 'apa',

            ])->onlyInput('email');
        }
        
    }

    public function logout()
        {
            Auth::logout();
            return redirect('login');
        }
}
