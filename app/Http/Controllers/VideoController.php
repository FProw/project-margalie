<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.listVideo', compact('videos'));
    }
    public function create(){
        return view('admin.video.addVideo');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'youtube_id' => 'string|size:11|nullable',
            'video' => 'file|mimes:mp4,mov,ogg,qt|max:20000|nullable',
        ]);
        $video = new Video();
        $video->title = $validatedData['title'];

        if ($request->hasFile('video')) {
            $file = $request->video;
            $ext = $file->getClientOriginalExtension();
            $filename = $video->title .'_'. time(). '.' . $ext;
            $fileContents = file_get_contents($request->file('video'));
            Storage::disk('public')->put('assets/video/' . $filename, $fileContents);
            $path = 'assets/video/' . $filename;
            $video->path = $path;
            $video->youtube_id = null;
        }else if($request->youtube_id){
            $video->path = null;
            $video->youtube_id = $validatedData['youtube_id'];
        }
        $video->save();
        return redirect()->back()->with('msg', 'Video sukses ditambah!');
    }
    public function edit($id){
        $video = Video::find($id);
        return view('admin.video.editVideo')->with('video', $video);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'youtube_id' => 'string|size:11|nullable',
            'video' => 'file|mimes:mp4,mov,ogg,qt|max:20000|nullable',
        ]);

        $video = Video::find($id);
        $video->title = $validatedData['title'];

        if ($request->hasFile('video')) {
            if(!is_null($video->path) && Storage::disk('public')->exists($video->path)){
                Storage::disk('public')->delete($video->path);
            }
            $file = $request->video;
            $ext = $file->getClientOriginalExtension();
            $filename = $video->title .'_'. time(). '.' . $ext;
            $fileContents = file_get_contents($request->file('video'));
            Storage::disk('public')->put('assets/video/' . $filename, $fileContents);
            $path = 'assets/video/' . $filename;
            $video->path = $path;
            $video->youtube_id = null;
        }else if($request->youtube_id){
            if(!is_null($video->path) && Storage::disk('public')->exists($video->path)){
                Storage::disk('public')->delete($video->path);
            }
            $video->path = null;
            $video->youtube_id = $validatedData['youtube_id'];
        }
        $video->save();
        return redirect()->back()->with('success', 'Video Berhasil Di Update');
    }
    public function destroy ($id){
        $video = Video::find($id);
        if(Storage::disk('public')->exists($video->path)){
            Storage::disk('public')->delete($video->path);
        }
        $video->delete();
        return redirect()->back()->with('success', 'Video Berhasil Dihapus');
    }
}
