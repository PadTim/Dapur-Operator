<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Tahun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WilujengController extends Controller
{
    public function wilujengSumping()
    {
        $tahun = Tahun::all();
        return view('Wilujeng',[
            'tahun' =>$tahun,
            'title' => 'Selamat Datang',
        ]);
    }
    public function updateAksi(Request $request)
{
    $selectedTahunId = $request->input('selected_tahun');

    // Mendapatkan semua objek Tahun dari database
    $tahuns = Tahun::all();
    $user = User::first(); // Mendapatkan objek pengguna pertama

    foreach ($tahuns as $tahun) {
        if ($tahun->id == $selectedTahunId) {
            $tahun->aksi = true;
        } else {
            $tahun->aksi = false;
        }
        $tahun->save();
    }

    if ($user->is_admin === 1) {
        // Setelah login, pengguna diarahkan ke halaman admin
        return redirect('/admin-dashboard');
    } else {
        // Setelah login, pengguna diarahkan ke halaman lain
        return redirect('/user-login');
    }
}

    
    public function userLogin()
    {
        $tahunAktif = Tahun::where('aksi', true)->get();
        // $rekanan = Rekanan::all();
        return view('Users.UserLogin',[
            'tahunAktif' =>$tahunAktif,
            // 'rekanan' =>$rekanan,
            'title' => 'Selamat Datang',
            'title_bar' => 'Wilujeng Sumping',
        ]);
    }
}
