<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\User;


class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register', [
            'gender' => Gender::all()
        ]);
    }
    
    public function postRegister(Request $request)
    {
        // dd($request->gender);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8|max:10',
        ]);

        User::create([
            'name' => $request->name,
            'role' => 'user',
            'gender_id' => $request->gender,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/');
    }
}
