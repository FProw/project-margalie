<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class EditController extends Controller
{
    function index(){
        return view('admin.edit.basicconfig');
    }
    function sliderList(){
        $slider = Slider::all();
        return view('admin.basic.sliderList')->with('slider', $slider);
    }
}
