<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        
        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:255','min-3'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min-3','confirmed'],
        ]);

        // dd($request->all());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('user/login')->with('status','User created successfully!');
    }

    public function login(){
        return view('user.login');
    }

    public function autenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            redirect('/user/login')->with('status','User logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
