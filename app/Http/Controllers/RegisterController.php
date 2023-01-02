<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('main.register');
    }
    public function registerWeb(Request $request){
        $validateData = $request-> validate([
            'name'=> 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'min:8',
        ]);
        $user = new User();
        $user->full_name = $validateData['full_name'];
        $user->email = $validateData['email'];
        $user->password = bcrypt($validateData['password']);
        $user->role_id = 2;
        $user->save();
        return redirect('/login')->with('sukses','Akun ditambah');
    }
}
