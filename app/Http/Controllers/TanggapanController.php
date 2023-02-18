<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;


class TanggapanController extends Controller
{
    public function createOrUpdate(Request $request, $id){
        $getLaporan = Laporan::where('id', $id)->update(['tanggapan' => $request->tanggapan]);
        return back()->with('success', 'Tanggapan berhasil terkirim!');
    }
}
