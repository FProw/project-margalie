<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Gallery;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function dashboard(){
        $jumlahanggota = Anggota::count();
        $jumlahuser = User::count();
        $jumlahblog = BlogPost::count();
        $jumlahgambar = Gallery::count();
        $data = [
            'anggota' => $jumlahanggota,
            'user' => $jumlahuser,
            'blog' => $jumlahblog,
            'gallery' => $jumlahgambar
        ];

        return view('admin.dashboard')->with($data);
    }
}
