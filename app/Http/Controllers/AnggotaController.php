<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnggotaController extends Controller
{
    function list(){
        
        $anggota = Anggota::all();
        return view('admin.listAnggota')->with(['list' => $anggota]);
    }
    function create(){
        return view('admin.addAnggota');
    }
    function add(Request $request){
        // Validasi
        $validateData = Validator::make( $request->all(),[
            'email' => 'required|email',
            'nama_depan' => 'required|min:3|max:30',
            'nama_belakang' => 'required|min:3|max:30',
            'tanggal_lahir' => 'required|date',
            'tanggal_join' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' =>'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:3|max:1000',
            'NIK' => 'required|digits:16|unique:anggotas',
            'pasfoto' => 'required|mimes:jpeg,png,jpg|max:10240',
            'fotoktp' => 'required|mimes:jpeg,png,jpg|max:10240'
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }

        $validateData = $request->all();

        // Insert Anggota
        $anggota = new Anggota();
        $anggota->email = $validateData['email'];
        $anggota->nama_depan = $validateData['nama_depan'];
        $anggota->nama_belakang = $validateData['nama_belakang'];
        $anggota->tanggal_lahir = $validateData['tanggal_lahir'];
        $anggota->tanggal_join = $validateData['tanggal_join'];
        $anggota->jenis_kelamin = $validateData['jenis_kelamin'];
        $anggota->agama = $validateData['agama'];
        $anggota->alamat = $validateData['alamat'];
        $anggota->NIK = $validateData['NIK'];
        if($request->pasfoto !=null){
            $file = $request->pasfoto;
            $ext = $file->getClientOriginalExtension();
            $filename = $request->nama_depan.$request->nama_belakang.'_'.time().'.'.$ext;
            // Storage::putFileAs('public/assets/anggota/pasfoto', $file, $filename);
            $request->pasfoto->move(public_path('assets/anggota/pasfoto'), $filename);
            $pathPasFoto = 'assets/anggota/pasfoto/'.$filename;
            $anggota->pasfoto = $pathPasFoto;
        }
        if($request->fotoktp !=null){
            $file = $request->fotoktp;
            $ext = $file->getClientOriginalExtension();
            $filename = $request->nama_depan.$request->nama_belakang.'_'.time().'.'.$ext;
            // Storage::putFileAs('public/assets/anggota/fotoktp', $file, $filename);
            $request->fotoktp->move(public_path('assets/anggota/fotoktp'), $filename);
            $pathfotoktp = 'assets/anggota/fotoktp/'.$filename;
            $anggota->fotoktp = $pathfotoktp;
        }
        $anggota->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['msg' => 'Added Anggota!']);
    }
    function edit($id){
        $anggota = Anggota::where('id', $id)->first();
        return view('admin.editAnggota', ['anggota' => $anggota]);
    }
    function update(Request $request, $id){
        $validateData = Validator::make( $request->all(),[
            'email' => 'required|email',
            'nama_depan' => 'required|min:3|max:30',
            'nama_belakang' => 'required|min:3|max:30',
            'tanggal_lahir' => 'required|date',
            'tanggal_join' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' =>'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:3|max:1000',
            'NIK' => 'required|digits:16|unique:anggotas',
            'pasfoto' => 'required|mimes:jpeg,png,jpg|max:10240',
            'fotoktp' => 'required|mimes:jpeg,png,jpg|max:10240'
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput($request->input());
        }
        // update Anggota
        $anggota = new Anggota();
        $anggota->email = $validateData['email'];
        $anggota->nama_depan = $validateData['nama_depan'];
        $anggota->nama_belakang = $validateData['nama_belakang'];
        $anggota->tanggal_lahir = $validateData['tanggal_lahir'];
        $anggota->tanggal_join = $validateData['tanggal_join'];
        $anggota->jenis_kelamin = $validateData['jenis_kelamin'];
        $anggota->agama = $validateData['agama'];
        $anggota->alamat = $validateData['alamat'];
        $anggota->NIK = $validateData['NIK'];
        if($request->pasfoto !=null){
            $file = $request->pasfoto;
            $ext = $file->getClientOriginalExtension();
            $filename = $request->nama_depan.$request->nama_belakang.'_'.time().'.'.$ext;
            // Storage::putFileAs('public/assets/anggota/pasfoto', $file, $filename);
            $request->pasfoto->move(public_path('assets/anggota/pasfoto'), $filename);
            $pathPasFoto = 'assets/anggota/pasfoto/'.$filename;
            $anggota->pasfoto = $pathPasFoto;
        }
        if($request->fotoktp !=null){
            $file = $request->fotoktp;
            $ext = $file->getClientOriginalExtension();
            $filename = $request->nama_depan.$request->nama_belakang.'_'.time().'.'.$ext;
            // Storage::putFileAs('public/assets/anggota/fotoktp', $file, $filename);
            $request->fotoktp->move(public_path('assets/anggota/fotoktp'), $filename);
            $pathfotoktp = 'assets/anggota/fotoktp/'.$filename;
            $anggota->fotoktp = $pathfotoktp;
        }
        $anggota->save();
        return redirect()->back()->with(['msg' => 'Entri diupdate']);
    }
    function delete($id){
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/listanggota')->with(['delete' => 'Hapus Berhasil!']);
    }
    function deletelist(){
        $anggota = Anggota::onlyTrashed()->get();
        return view('admin.deletedAnggota')->with(['list' => $anggota]);
    }
    function restore($id){
        $anggota = Anggota::onlyTrashed()->where('id', $id);
        $anggota->restore();
        return back()->with('success', 'Restorasi Berhasil!');
    }
    function permadelete($id){
        $anggota = Anggota::onlyTrashed()->where('id', $id);
        $anggota->forceDelete();
        return back()->with('delete', 'Penghapusan Permanen Berhasil');
    }
}
