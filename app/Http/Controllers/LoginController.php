<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RateLimiter;

class LoginController extends Controller
{
    public function formLogin()
    {
        $key = "login.".request()->ip();
        return view('login',[
            'key'=>$key,
            'retries'=>RateLimiter::retriesLeft($key, 5),
            'seconds'=>RateLimiter::availableIn($key),
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        RateLimiter::clear("login.".$request->ip());
        return "Success Login.";
    }
}
