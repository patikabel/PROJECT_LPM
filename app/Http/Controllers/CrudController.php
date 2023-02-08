<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Petugas;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function create(){
        return view('create', [
            'title' => 'Create | Crud'
        ]);
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required'
        ]);
        $validasiData['password'] = Hash::make($validasiData['password']);

        User::create($validasiData);
        return redirect('/petugas')->with('success', 'Registrasi Berhasil');
    }

    public function delete($id){


        Laporan::where('id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }

    public function deletePetugas($id)
    {
        User::where('id', $id)->delete();

        return back();
    }

    public function buatPetugas(Request $request){
        $validasiData = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|',
            'password'  => 'required|min:5|max:255'
        ]);

        $validasiData['role'] = 'Petugas';
        $validasiData['password'] = Hash::make($validasiData['password']);

        User::create($validasiData);
        return redirect('/petugas ')->with('success', 'Registrasi Berhasil');
    }

}
