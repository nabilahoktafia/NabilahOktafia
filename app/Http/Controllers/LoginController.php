<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password')))
        {
            return redirect('/dashboard');
        }
        return redirect('/dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}