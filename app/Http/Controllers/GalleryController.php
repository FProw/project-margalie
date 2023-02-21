<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    function list(){
        
        $gallery = Gallery::all();
        return view('admin.gallery.listGallery')->with(['list' => $gallery]);
    }
    function create(){
        return view('admin.gallery.addGallery');
    }
    function add(Request $request){
        // Validasi
        $validateData = Validator::make( $request->all(),[
            'image' => 'required|mimes:jpeg,png,jpg|max:10240',
            'title' => 'required|min:3|max:30',
            'description' => 'required|min:3|max:255',
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }

        $validateData = $request->all();

        // Insert Gallery
        $gallery = new Gallery();
        $gallery->title = $validateData['title'];
        $gallery->description = $validateData['description'];
        if($request->hasFile('image')){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = $request->title.'_'.time().'.'.$ext;
            $request->image->move(public_path('assets/index/gallery'), $filename);
            $pathimage = 'assets/index/gallery/'.$filename;
            $gallery->imagepath = $pathimage;
        }
        $gallery->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['msg' => 'Added Gallery!']);
    }
    function edit($id){
        $gallery = Gallery::where('id', $id)->first();
        return view('admin.gallery.editGallery', ['gallery' => $gallery]);
    }
    function update(Request $request, $id){
        $validateData = Validator::make( $request->all(),[
            'image' => 'mimes:jpeg,png,jpg|max:10240',
            'title' => 'required|min:3|max:30',
            'description' => 'required|min:3|max:255',
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }
        $validateData = $request->all();
        // update Gallery
        $gallery = Gallery::find($id);
        $gallery->title = $validateData['title'];
        $gallery->description = $validateData['description'];
        if($request->hasFile('image')){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = $request->title.'_'.time().'.'.$ext;
            $request->image->move(public_path('assets/index/gallery'), $filename);
            $pathimage = 'assets/index/gallery/'.$filename;
            $gallery->imagepath = $pathimage;
        }
        $gallery->save();
        return redirect()->back()->with(['msg' => 'Entri diupdate']);
    }
    function delete($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('/listgallery')->with(['delete' => 'Hapus Berhasil!, Entri dipindahkan ke tong sampah.']);
    }
    function deletelist(){
        $gallery = Gallery::onlyTrashed()->get();
        return view('admin.gallery.deletedGallery')->with(['list' => $gallery]);
    }
    function restore($id){
        $gallery = Gallery::onlyTrashed()->where('id', $id)->first();
        $gallery->restore();
        return back()->with('success', 'Restorasi Berhasil!');
    }
    function permadelete($id){
        $gallery = Gallery::onlyTrashed()->where('id', $id)->first();
        unlink($gallery->imagepath);
        $gallery->forceDelete();
        return back()->with('delete', 'Penghapusan Permanen Berhasil');
    }
}
