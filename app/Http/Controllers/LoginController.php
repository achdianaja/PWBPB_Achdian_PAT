<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('index');
        }else{
            return view('auth.login');
        }
    }

    public function postLogin(AuthRequest $request)
    {
        $data = $request->validate([
            'email' => 'required', 'email',
            'password' => 'required',
        ]);
        
        

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('index');
        }else{
            Alert::warning('email atau password anda salah', 'danger');
            return back()->onlyInput('error');
        }
        
    }

    public function ubahPassword()
        {
            return view('auth.ubah-password');
        }

    public function resetPassword()
        {
            
        }

    public function logout()
        {
            Auth::logout();
            return redirect('/');
        }
}
