<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('login', [
            "title" => "Log-In | Page"
        ]);
    }

    public function datalogin(Request $request){
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ];

        if(Auth::attempt($data)){
            return redirect('dashboard');
        } else {
            $request->session()->flash('error', 'Email atau Password salah!');
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }




    public function register(){
        return view('register', [
            "title" => "Register | Page"
        ]);
    }

    public function masuk(Request $request){
        $validasiData = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|',
            'password'  => 'required|min:5|max:255'
        ]);

        $validasiData['password'] = Hash::make($validasiData['password']);

        User::create($validasiData);
        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
}
