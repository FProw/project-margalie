<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    function list(){
        
        $slider = Slider::all();
        return view('admin.slider.listSlider')->with(['list' => $slider]);
    }
    function create(){
        return view('admin.slider.addSlider');
    }
    function add(Request $request){
        // Validasi
        $validateData = Validator::make( $request->all(),[
            'image' => 'required|mimes:jpeg,png,jpg|max:10240',
            'description' => 'required|min:3|max:255'
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }

        $validateData = $request->all();

        // Insert Slider
        $slider = new Slider();
        $slider->description = $validateData['description'];
        if($request->image !=null){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = 'Slider_'.time().'.'.$ext;
            $request->image->move(public_path('assets/slider'), $filename);
            $pathPasFoto = 'assets/slider/'.$filename;
            $slider->path = $pathPasFoto;
        }
        $slider->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['success' => 'Added Slider!']);
    }
    function edit($id){
        $slider = Slider::where('id', $id)->first();
        return view('admin.slider.editSlider', ['slider' => $slider]);
    }
    function update(Request $request, $id){
        $validateData = Validator::make( $request->all(),[
            'image' => 'required|mimes:jpeg,png,jpg|max:10240',
            'description' => 'required|min:3|max:255'
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }
        $validateData = $request->all();
        // update Slider
        $slider = Slider::find($id);
        $slider->description = $validateData['description'];
        if($request->image !=null){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = 'Slider_'.time().'.'.$ext;
            $request->image->move(public_path('assets/slider'), $filename);
            $pathPasFoto = 'assets/slider/'.$filename;
            $slider->path = $pathPasFoto;
        }
        $slider->save();
        return redirect()->back()->with(['msg' => 'Entri diupdate']);
    }
    function delete($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('/listslider')->with(['delete' => 'Hapus Berhasil!']);
    }
}
