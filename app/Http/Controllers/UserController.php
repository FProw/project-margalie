<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function list(){
        
        $user = User::all();
        return view('admin.user.listuser')->with(['list' => $user]);
    }
    function create(){
        return view('admin.user.adduser');
    }
    function add(Request $request){
        // Validasi User
        $validateData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'nama' => 'required|min:3|max:30',
            'password' => 'required|min:8|confirmed'
        ]);

        // Insert user
        $user = new User();
        $user->email = $validateData['email'];
        $user->name = $validateData['nama'];
        $user->password = bcrypt($validateData['password']);
        $user->save();

        // Balik ke halaman dengan pesan
        return redirect()->back()->with(['msg' => 'Added user!']);
    }
    function edit($id){
        $user = user::where('id', $id)->first();
        return view('admin.user.edituser', ['user' => $user]);
    }
    function update(Request $request, $id){
        $validateData = $request->validate([
            'email' => 'required|email',
            'nama' => 'required|min:3|max:30',
            'password' => 'required|min:8'
        ]);
        $user = User::find($id);
        $user->email = $validateData['email'];
        $user->name = $validateData['nama_depan'];
        $user->password = bcrypt($validateData['password']);
        $user->save();
        return redirect()->back()->with(['msg' => 'Updated!']);
    }
    function delete($id){
        if(User::count() == 1){
            return redirect('/listuser')->with(['error' => 'Cannot Delete Last Admin']);
        }
        else{
            $user = User::find($id);
            $user->delete();
            return redirect('/listuser')->with(['delete' => 'Deletion Successful']);
        }
    }
    function deletelist(){
        $user = User::onlyTrashed()->get();
        return view('admin.user.deleteduser')->with(['list' => $user]);
    }
    function restore($id){
        $User = User::onlyTrashed()->where('id', $id);
        $User->restore();
        return back()->with('success', 'Restorasi Berhasil!');
    }
    function permadelete($id){
        $User = User::onlyTrashed()->where('id', $id);
        $User->forceDelete();
        return back()->with('delete', 'Penghapusan Permanen Berhasil');
    }
}
