<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function logout(){
        Auth::logout();
        return redirect('login')->with(['success' => 'Logout Successful']);
    }
}
