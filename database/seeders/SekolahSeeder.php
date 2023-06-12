<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create([ 
                'user_id'=>'4',
                'npsn'=>'20101044',
                'npwp'=>'00.449.940.6-044.000',
                'nama_sekolah'=>'SDN Pademangan Timur 01',
                'nama_kepsek'=>'Teguh Idaryanto, S.Pd',
                'nip_kepsek'=>'-',
                'nama_bendahara'=>'Dedeh Yulianti, S.Pd',
                'nip_bendahara'=>'-',
                'nama_pengurus_barang'=>'Tia Ulfah Muamawah, S.Pd',
                'nip_pengurus_barang'=>'-',
                'nama_pengawas'=>'Bambang',
                'nip_pengawas'=>'-',
                'alamat_sekolah'=>'Jalan Pademangan II Gg.22',
                'rt'=>'012',
                'rw'=>'002',
                'kel'=>'Pademangan Timur',
                'kec'=>'Pademangan',
                'kota'=>'Jakarta Utara',
                'prov'=>'DKI Jakarta',
                'kodepos'=>'14410',
                'email'=>'sdnpademangantimur01@gmail.com',
                'telp'=>'021-021021',
                'stempel_sekolah'=> 'stempel_sekolah.png',
                'logo_sekolah'=> 'logo-sekolah.png',
                'foto_sekolah'=> 'sekolah.jpg',
                'nama_kop_sekolah'=>'Sekolah Dasar Negeri Pademangan Timur 01',
                ]);
    }
}
