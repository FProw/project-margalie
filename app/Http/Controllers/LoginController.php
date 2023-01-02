<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Halaman Login
    function login(){
        return view("main.login");
    }

    // Proses Login
    function loginWeb(Request $request){
        $remember_me = $request->remember ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me)){
            // Session::put('mysession',$request->email);
            return redirect('dashboard');
        }
        return redirect('login')->with(['error' => 'Email atau/dan Password salah!!!']);
    }
}
