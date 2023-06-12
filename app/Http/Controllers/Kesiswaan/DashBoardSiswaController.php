<?php

namespace App\Http\Controllers\Kesiswaan;

use App\Models\Kesiswaan\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardSiswaController extends Controller
{
    public function siswaDashboard(){
        $siswa = siswa::all();
        $jmlKelas1= Siswa::where('kelas_id',1)->count();
        $Kelas1L = Siswa::where('jk', 'L')->where('kelas_id', 1)->count();
        $Kelas1P = Siswa::where('jk', 'P')->where('kelas_id', 1)->count();

        return view('Kesiswaan.Siswa-Dashboard',[
            'title' => 'Dapur Operator',
            'title_bar' => 'Dashboard Kesiswaan',
            'siswa' =>$siswa,
            'jmlKelas1'=>$jmlKelas1,
            'Kelas1L'=>$Kelas1L,
            'Kelas1P'=>$Kelas1P,
        ]);
    }
}
