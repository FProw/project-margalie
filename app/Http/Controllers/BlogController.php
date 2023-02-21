<?php

namespace App\Http\Controllers;

use App\Models\blog;
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
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
        ]);
        // Insert Blog
        $blog = new BlogPost();
        $blog->title = $validateData['title'];
        $blog->content = $validateData['content'];
        $blog->slug = Str::slug($validateData['title']);
        $blog->user_id = Auth::id();
        if($validateData['image']){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = $blog->slug.'_'.time().'.'.$ext;
            $request->image->move(public_path('assets/blog/gambar'), $filename);
            $pathimage = 'assets/blog/gambar/'.$filename;
            $blog->image = $pathimage;
        }
        $blog->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['msg' => 'Blog Berhasil Ditambah']);
    }
    function edit($id){
        $blog = BlogPost::where('id', $id)->first();
        return view('admin.blog.editblog', ['blog' => $blog]);
    }
    function update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:10000',
        ]);
        $blog = BlogPost::find($id);
        $blog->title = $validateData['title'];
        $blog->content = $validateData['content'];
        $blog->slug = Str::slug($validateData['title']);
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->image;
            $ext = $file->getClientOriginalExtension();
            $filename = $blog->slug.'_'.time().'.'.$ext;
            $request->image->move(public_path('assets/blog/gambar'), $filename);
            $pathimage = 'assets/blog/gambar/'.$filename;
            $blog->image = $pathimage;
        }
        $blog->save();
        return redirect()->back()->with(['msg' => 'Blog Diupdate']);
    }
    function delete($id){
        $blog = BlogPost::find($id);
        $blog->delete();
        return redirect('/listblog')->with(['delete' => 'Deletion Successful']);
    }
    function deletelist(){
        $blog = BlogPost::onlyTrashed()->get();
        return view('admin.blog.deletedblog')->with(['list' => $blog]);
    }
    function restore($id){
        $User = BlogPost::onlyTrashed()->where('id', $id);
        $User->restore();
        return back()->with('success', 'Restorasi Berhasil!');
    }
    function permadelete($id){
        $User = BlogPost::onlyTrashed()->where('id', $id);
        $User->forceDelete();
        return back()->with('delete', 'Penghapusan Permanen Berhasil');
    }
}
