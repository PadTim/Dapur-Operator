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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sekolah_id')->nullable();
            $table->string('tahun_id')->nullable();
            $table->string('kelas_id')->nullable();
            $table->string('rombel_id')->nullable();
            $table->string('nis')->unique();
            $table->string('nisn')->unique();
            $table->string('nopes')->nullable();
            $table->string('nama');
            $table->string('jk')->default('L');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->default('Islam');
            $table->string('nik')->nullable();
            $table->string('kk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kel')->nullable();
            $table->string('kec')->nullable();
            $table->string('kota')->nullable();
            $table->string('prov')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('status_siswa')->default('aktive');
            $table->string('foto')->default('siswa.png');
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_online')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
