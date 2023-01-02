<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class AdminController extends Controller
{
    function dashboard(){
        $jumlahanggota = Anggota::count();
        $jumlahuser = User::count();
        $jumlahblog = BlogPost::count();
        $data = [
            'anggota' => $jumlahanggota,
            'user' => $jumlahuser,
            'blog' => $jumlahblog
        ];

        return view('admin.dashboard')->with($data);
    }
}
