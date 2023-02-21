<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Video;
use App\Models\Slider;
use App\Models\Anggota;
use App\Models\Gallery;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    // Halaman Home
    function index(){
        $count = Anggota::count();
        $Slider = Slider::all();
        $gallery = Gallery::all();
        return view('main.index')->with('count', $count)->with('gallery', $gallery)->with('slider', $Slider);
    }
    // Halaman Tentang Kami
    function aboutus(){
        return view('main.aboutus');
    }
    // Halaman Berita
    function berita(){
        $latest = BlogPost::query()->orderby('created_at', 'desc')->take('3')->get();
        $latest2 = BlogPost::query()->orderby('created_at', 'desc')->skip('3')->take('5')->get();
        $latest2->append('carbon_date');

        return view('main.berita')->with('latest', $latest)->with('latest2', $latest2);
    }
    function addBerita(Request $request){
        $offset = $request->input('offset', 0);
        $berita = BlogPost::with('user')->skip($offset)->take(5)->get()   ;
        $berita->append('carbon_date');
        $berita = $berita->toArray();
        return response()->json($berita);
    }
    //Halaman Video
    function video(){
        $videos = Video::take(3)->get();
        return view('main.video')->with('video',$videos);
    }
    function organisation(){
        $actors = DB::table('actors as a1')
            ->leftJoin('actors as a2', 'a1.manager_id', '=', 'a2.id')
            ->select('a1.nama', 'a2.nama as manager_name','a1.posisi')
            ->orderBy('a1.id')
            ->get()
            ->toArray();

            $actorsArray = array_map(function ($actor) {
                return (array) $actor;
            }, $actors);

        $orgMap = array_map('array_values', $actorsArray);
        $orgJSON = json_encode($orgMap);
        return view('main.organisation', ['json' => $orgJSON]);
    }
}
