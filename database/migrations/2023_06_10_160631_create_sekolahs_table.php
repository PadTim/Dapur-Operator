<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('npsn')->unique();
            $table->string('npwp')->nullable();
            $table->string('nama_sekolah')->unique();
            $table->string('nama_kepsek')->nullable();
            $table->string('nip_kepsek')->nullable();
            $table->string('nama_bendahara')->nullable();
            $table->string('nip_bendahara')->nullable();
            $table->string('nama_pengurus_barang')->nullable();
            $table->string('nip_pengurus_barang')->nullable();
            $table->string('nama_pengawas')->nullable();
            $table->string('nip_pengawas')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kel')->nullable();
            $table->string('kec')->nullable();
            $table->string('kota')->nullable();
            $table->string('prov')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
            $table->string('logo_sekolah')->default('logo-sekolah.png');
            $table->string('stempel_sekolah')->default('stempel-sekolah.png');
            $table->string('foto_sekolah')->default('sekolah.jpg');
            $table->string('nama_kop_sekolah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
