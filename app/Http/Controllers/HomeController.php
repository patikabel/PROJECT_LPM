<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\User;

class HomeController extends Controller
{

    public function tampilan(){
        return view('tampilan', [
            "title" => "Home | Page"
        ]);
    }
    public function dashboard(){
        return view('dashboard', [
            "title" => "Dasboard | Page",
        ]);
    }
    public function laporan(){
        return view('laporan', [
            "title" => "Laporan | Page",
            "data" => Laporan::all(),
            'no' => 1
        ]);
    }
    public function petugas(){
        return view('petugas', [
            "title" => "Petugas | Page",
            "petugas" => User::all()
        ]);
    }


    public function home(Request $request){
        return view('home', [
            "title" => "Laporan | Page",
        ]);
    }



    public function actiondata(Request $request){
        $finaldata = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor' => '',
            'laporan' => '',
            'tanggal' => '',
            'upload' => ''
        ]);

        if($request->file('upload') != null){
            $file = $request->file('upload');

            $namafile = md5_file($file->getRealPath());
            $getExtension = $file->guessExtension();
            $fullNameFile = $namafile.'.'.$getExtension;
            $file->move(base_path('\storage\app\public\image'), $fullNameFile);

            $finaldata['upload'] = $fullNameFile;

        }


        Laporan::create($finaldata);


        return back();
    }

}
