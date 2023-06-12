<?php namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Sekolah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

    public
    function adminDashboard() {

        return view('Admin.admin-dashboard',
            [
                'title' => 'Dapur Operator',
                'title_bar' => 'Admin Dashboard'
            ]);
    }

    public
    function adminManajemen() {

        $user = User::all();
        $sekolah = Sekolah::all();
        return view('Admin.admin-Manajemen',
            [
                'title' => 'Dapur Operator',
                'title_bar' => 'Admin Manajemen',
                'user' => $user,
                'sekolah' => $sekolah
            ]);
    }

    public function userManajemenTambah(Request $request)
    {
           
            $request->validate(
                [
                 'name'      => 'required|max:255',
                 'username'  => ['required', 'min:4', 'unique:users'],
                 'email'     => 'required|email:dns|unique:users',
                 'password'  => 'required|max:255|min:4',  
                ],
                [
                  'name.required'        => 'Nama Lengkap Harus di isi',
                  'username.required'    => 'username Lengkap Harus di isi',
                  'username.unique'      => 'username sudah ada yang punya!!!, ganti yang lain ',
                  'username.min'         => 'username minimal 4 caracter ',
                  'email.required'       => 'email Harus di isi',
                  'email.unique'         => 'email sudah ada yang punya!!!, ganti yang lain ',
                  'email.email'          => 'gunakan email yang benar!!! ',
                  'password.required'    => 'password Harus di isi',
                  'password.min'         => 'password minimal 4 caracter ',
     
                ] 
             );
     
             $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'hp' => $request->hp,
                'password' => Hash::make($request->password),
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
            ]);
            
            if ($request->hasFile('pp')) {
                $file = $request->file('pp');
                $filename = $file->getClientOriginalName();
                $destinationPath = public_path('assets/img/profile');
                $file->move($destinationPath, $filename);
                $user->pp = $filename;
            }
            
            $user->save();

             $sekolah = new Sekolah;
             $sekolah->user_id = $user->id;
             $sekolah->npsn = $request->input('username');
             $sekolah->nama_sekolah =$request->input('nama_sekolah');
             $sekolah->nama_kop_sekolah =$request->input('nama_kop_sekolah');
            //  $sekolah->kode_surat_cv =$request->input('kode_surat_cv');
             $sekolah->save();

             return redirect()->back()->with('Input Berhasil', 'User Berhasil Di Tambahkan');
    }

    
    public function userManajemenhEdit($id)
    {
       $user = User::find($id);
    
        return view('Admin.UserUpdate', [
            'title' => 'Dapur Operator',
            'title_bar' => 'Update Profile',
            'user' => $user
        ]);
    }
    
    public function userManajemenhUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->hp = $request->input('hp');
        $user->is_admin = $request->input('is_admin');
        
        if ($request->hasFile('pp')) {
            $file = $request->file('pp');
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path('assets/img/profile');
            $file->move($destinationPath, $filename);
            $user->pp = $filename;
        }

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('adminManajemen')->with('Update Berhasil', 'Profile Berhasil Di Update');
    }

    public function hapusUser($id)
    {
        // Temukan data sekolah berdasarkan ID
        $user = User::find($id);

        // Periksa apakah data sekolah ditemukan
        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan');
        }

        // Hapus data sekolah
        $user->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('Delete Berhasil', 'User berhasil dihapus');
    }

    public function adminSekolahEdit($id)
    {
       $sekolah = Sekolah::find($id);
    
        return view('Admin.SekolahUpdate', [
            'title' => 'Dapur Operator',
            'title_bar' => 'Profile Sekolah',
            'sekolah' => $sekolah
        ]);
    }
    

    public function adminSekolahUpdate(Request $request, $id)
    {
        $sekolah = Sekolah::find($id);
        $sekolah->npsn = $request->input('npsn');
        $sekolah->npwp = $request->input('npwp');
        $sekolah->nama_sekolah = $request->input('nama_sekolah');
        $sekolah->alamat_sekolah = $request->input('alamat_sekolah');
        $sekolah->rt = $request->input('rt');
        $sekolah->rw = $request->input('rw');
        $sekolah->kel = $request->input('kel');
        $sekolah->kec = $request->input('kec');
        $sekolah->kota = $request->input('kota');
        $sekolah->prov = $request->input('prov');
        $sekolah->kodepos = $request->input('kodepos');
        $sekolah->telp = $request->input('telp');
        $sekolah->nama_kepsek = $request->input('nama_kepsek');
        $sekolah->nip_kepsek = $request->input('nip_kepsek');
        $sekolah->nama_bendahara = $request->input('nama_bendahara');
        $sekolah->nip_bendahara = $request->input('nip_bendahara');
        $sekolah->nama_pengurus_barang = $request->input('nama_pengurus_barang');
        $sekolah->nip_pengurus_barang = $request->input('nip_pengurus_barang');
        $sekolah->nama_pengawas = $request->input('nama_pengawas');
        $sekolah->nip_pengawas = $request->input('nip_pengawas');
        if ($request->hasFile('logo_sekolah')) {
            $file = $request->file('logo_sekolah');
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path('assets/img/sekolah');
            $file->move($destinationPath, $filename);
            $sekolah->logo_sekolah = $filename;
        }
        if ($request->hasFile('stempel_sekolah')) {
            $file = $request->file('stempel_sekolah');
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path('assets/img/sekolah');
            $file->move($destinationPath, $filename);
            $sekolah->stempel_sekolah = $filename;
        }
        if ($request->hasFile('foto_sekolah')) {
            $file = $request->file('foto_sekolah');
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path('assets/img/sekolah');
            $file->move($destinationPath, $filename);
            $sekolah->foto_sekolah = $filename;
        }
        $sekolah->save();

      
        // return redirect()->route('sekolah', ['id' => $sekolah->id])->with('Update Berhasil', 'Sekolah berhasil di update');

        return redirect()->route('adminManajemen')->with('Update Berhasil', 'Profile Berhasil Di Update');
    }

    
    public function hapusSekolah($id)
    {
        // Temukan data sekolah berdasarkan ID
        $sekolah = Sekolah::find($id);

        // Periksa apakah data sekolah ditemukan
        if (!$sekolah) {
            return redirect()->back()->with('error', 'Data sekolah tidak ditemukan');
        }

        // Hapus data sekolah
        $sekolah->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Data sekolah berhasil dihapus');
    }

    public function backUP()
    {
       
        return view('Admin.zBackup',[
           
            'title' => 'BACKUP',
        ]);
    }


}
