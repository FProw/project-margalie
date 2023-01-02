<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function index($slug){
    
        $blog = BlogPost::where('slug', $slug)->first();
        return view('blog.blog')->with('blog', $blog);
    }
    function list(){
        
        $blog = BlogPost::all();
        return view('admin.blog.listblog')->with(['list' => $blog]);
    }
    function create(){
        return view('admin.blog.addblog');
    }
    function add(Request $request){
        // Validasi
        $validateData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        // Insert Blog
        $blog = new BlogPost();
        $blog->title = $validateData['title'];
        $blog->content = $validateData['content'];
        $blog->slug = Str::slug($validateData['title']);
        $blog->user_id = Auth::id();
        if($validateData['image']){
            $blog->image = $validateData['image'];
        }
        $blog->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['msg' => 'Blog Berhasil Ditambah']);
    }
    function edit($id){
        $blog = BlogPost::where('id', $id)->first();
        return view('admin.blog.editblog', ['anggota' => $anggota]);
    }
    function update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $blog = new BlogPost();
        $blog->title = $validateData['title'];
        $blog->content = $validateData['content'];
        $blog->slug = Str::slug($validateData['title']);
        if($validateData['image']){
            $blog->image = $validateData['image'];
        }
        $blog->save();
        return redirect()->back()->with(['msg' => 'Blog Diupdate']);
    }
    function delete($id){
        $blog = BlogPost::find($id);
        $blog->delete();
        return redirect('/listanggota')->with(['delete' => 'Deletion Successful']);
    }
    function deletelist(){
        $anggota = Anggota::onlyTrashed()->get();
        return view('admin.deletedAnggota')->with(['list' => $anggota]);
    }
}
