<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'role'     => 'Administrator',
            'password'  => Hash::make('admin')
        ]);
    }

    public function delete($id){

        User::where('id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }
}
