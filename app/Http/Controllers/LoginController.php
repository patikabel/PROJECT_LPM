<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
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

    public function redirectToProvider(){
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb

            if($user != null){
                \auth()->login($user, true);
                return redirect('dashboard');
            }else{
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now() // fungsi tgl saat ini
                ]);

                \auth()->login($create, true);
                return redirect('dashboard');
            }

        } catch (\Exception $e) {
            return redirect('/login');
        }


    }
}
