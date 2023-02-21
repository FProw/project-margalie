<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActorController extends Controller
{
    function list(){
        $actor = DB::table('actors as a1')
        ->leftJoin('actors as a2', 'a1.manager_id', '=', 'a2.id')
        ->select('a1.id','a1.nama', 'a2.nama as manager_name','a1.posisi', 'a1.prioritas')
        ->orderby('a1.prioritas', 'asc')
        ->get();
        return view('admin.actor.listActor')->with(['list' => $actor]);
    }
    function create(){
        $actor = Actor::all();
        return view('admin.actor.addActor')->with(['actor' => $actor]);
    }
    function add(Request $request){
        // Validasi
        $validateData = Validator::make( $request->all(),[
            'nama' => 'required|min:3|max:30',
            'posisi' => 'required|min:3|max:30',
            'bawahan' => 'required|exists:actors,id'
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }

        $validateData = $request->all();

        // Insert Actor
        $actor = new Actor();
        $manager = Actor::find($request->bawahan);
        $actor->nama = $validateData['nama'];
        $actor->posisi = $validateData['posisi'];
        $actor->manager_id = $manager->id;
        $actor->prioritas = $manager->prioritas + 1;
        $actor->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['msg' => 'Added Actor!']);
    }
    function edit($id){
        $actor = Actor::where('id', $id)->first();
        $actor2 = Actor::all();
        return view('admin.actor.editActor', ['data' => $actor, 'actor' => $actor2]);
    }
    function update(Request $request, $id){
        $validateData = Validator::make( $request->all(),[
            'nama' => 'required|min:3|max:30',
            'posisi' => 'required|min:3|max:30',
            'bawahan' => 'required|exists:actors,id'
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }
        // update Actor

        $validateData = $request->all();
        $actor = Actor::find($id);
        $manager = Actor::find($request->bawahan);
        $actor->nama = $validateData['nama'];
        $actor->posisi = $validateData['posisi'];
        $actor->manager_id = $manager->id;
        $actor->prioritas = $manager->prioritas + 1;
        $actor->save();
        return redirect()->back()->with(['msg' => 'Entri diupdate']);
    }
    function delete($id){
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/listactor')->with(['delete' => 'Hapus Berhasil!']);
    }
    function deletelist(){
        $actor = Actor::onlyTrashed()->get();
        return view('admin.actor.deletedActor')->with(['list' => $actor]);
    }
    function restore($id){
        $actor = Actor::onlyTrashed()->where('id', $id)->first();
        $actor->restore();
        return back()->with('success', 'Restorasi Berhasil!');
    }
    function permadelete($id){
        $actor = Actor::onlyTrashed()->where('id', $id)->first();
        // dd($actor->fotoktp);
        unlink($actor->fotoktp);
        unlink($actor->pasfoto);
        $actor->forceDelete();
        return back()->with('delete', 'Penghapusan Permanen Berhasil');
    }
}
