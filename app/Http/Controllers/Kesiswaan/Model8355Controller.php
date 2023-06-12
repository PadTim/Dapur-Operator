<?php

namespace App\Http\Controllers\Kesiswaan;

use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use App\Models\Kesiswaan\Siswa;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class Model8355Controller extends Controller
{
    public function indexSiswa8355(){
        $siswa = Siswa::orderBy('tingkat_id')->orderBy('kelas_id')->orderBy('rombel_id')->get();
        return view('Kesiswaan.Model-8355.index8355',[
            'title' => 'Dapur Operator',
            'title_bar' => 'Daftar Siswa Model 8355',
            'siswa' =>$siswa,
        ]);
    }

    public function importSiswa(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        $file = $request->file('file');

        try {
            Excel::import(new SiswaImport, $file);

            return redirect()->back()->with('success', 'Data siswa berhasil diimpor.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor data siswa: ' . $e->getMessage());
        }
    }

    public function updateSiswa(Request $request)
    {
        if ($request->ajax()) {
            Siswa::find($request->pk)
                ->update([
                    $request->name => $request->value
                ]);
  
            return response()->json(['success' => true]);
        }
    }

    public function cetakCover(){

        return view('Kesiswaan.Model-8355.cetakCover',[
            'title' => 'Dapur Operator',
            'title_bar' => 'Daftar Siswa Model 8355',
            
        ]);
    }
    public function cetakKelas1(){

        return view('Kesiswaan.Model-8355.cetakKelas1',[
            'title' => 'Dapur Operator',
            'title_bar' => 'Daftar Siswa Model 8355',
            
        ]);
    }
}
