<?php

namespace Database\Seeders;

use App\Models\Tahun;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahun1 = new Tahun();
        $tahun1->nama_tahun = '2023';
        $tahun1->aksi = '0';
        $tahun1->save();

        $tahun2 = new Tahun();
        $tahun2->nama_tahun = '2024';
        $tahun2->aksi = '0';
        $tahun2->save();

        $tahun3 = new Tahun();
        $tahun3->nama_tahun = '2025';
        $tahun3->aksi = '0';
        $tahun3->save();
    }
}
