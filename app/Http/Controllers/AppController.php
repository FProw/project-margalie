<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppController extends Controller
{
    function index(){
        return view('index');
    }
    function aboutus(){
        return view('aboutus');
    }
    function berita(){
        return view('berita');
    }
}
