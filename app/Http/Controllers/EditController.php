<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    function index(){
        return view('admin.edit.basicconfig');
    }
}
