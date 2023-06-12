<?php

namespace App\Imports;


use App\Models\Kesiswaan\Siswa;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SiswaImport implements ToModel, WithHeadingRow, WithValidation {


    public
    function rules(): array {
        return [
            'nis' => 'required|unique:siswas|max:4|min:1',
            'nisn' => 'required|unique:siswas|max:10|min:10',
        ];
    }


    public
    function customValidationMessages() {
        return [
            'nis.required' => 'NIS TIDAK KOSONG',
            'nis.unique' => 'NIS SUDAH DIGUNAKAN / TIDAK BOLEH SAMA',
            'nis.max' => 'NIS MINIMAL 4 digit',
            'nis.min' => 'NIS MINIMAL 4 digit',


            'nisn.required' => 'NISN TIDAK KOSONG',
            'nisn.unique' => 'NISN SUDAH DIGUNAKAN / TIDAK BOLEH SAMA',
            'nisn.max' => 'NISN harus 10 digit',
            'nisn.min' => 'NISN harus 10 digit',

        ];
    }


    public
    function model(array $row) {
        // dd($row); 

        return new Siswa([
            'sekolah_id' => $row['sekolah_id'],
            'tahun_id' => $row['tahun_id'],
            'kelas_id' => $row['kelas_id'],
            'rombel_id' => $row['rombel_id'],
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'nopes' => $row['nopes'],
            'nama' => $row['nama'],
            'jk' => $row['jk'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'agama' => $row['agama'],
            'nik' => $row['nik'],
            'kk' => $row['kk'],
            'alamat' => $row['alamat'],
            'rt' => $row['rt'],
            'rw' => $row['rw'],
            'kel' => $row['kel'],
            'kec' => $row['kec'],
            'kota' => $row['kota'],
            'prov' => $row['prov'],
            'kodepos' => $row['kodepos'],
            'hp' => $row['hp'],
            'email' => $row['email'],
            'nama_ayah' => $row['nama_ayah'],
            'nama_ibu' => $row['nama_ibu'],
            'status_siswa' => $row['status_siswa'],
            'foto' => $row['foto'],
            'username' => $row['nisn'],
            'password' => Hash::make('20101044'),
            'email_verified_at' => now(),
            'is_online' => 0,
        ]);
    }


}
