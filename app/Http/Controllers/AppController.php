<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppController extends Controller
{
    // Halaman Home
    function index(){
        $count = Anggota::count();
        return view('main.index')->with('count', $count);
    }
    // Halaman Tentang Kami
    function aboutus(){
        return view('main.aboutus');
    }
    // Halaman Berita
    function berita(){
        $latest = BlogPost::query()->take('3')->orderby('created_at', 'desc')->get();
        return view('main.berita')->with('latest', $latest);
    }
    //Halaman Video
    function video(){
        return view('main.video');
    }
}
