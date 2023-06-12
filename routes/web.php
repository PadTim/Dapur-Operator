<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\WilujengController;
use App\Http\Controllers\Kesiswaan\DashBoardSiswaController;
use App\Http\Controllers\Kesiswaan\SiswaController;
use App\Http\Controllers\Kesiswaan\Model8355Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// LOGIN USER-ADMIN
Route::get('/login', [AuthController::class, 'gerbang'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'registrasi']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/email/verify', function () {
    return view('auth.verifikasi',['title' =>'verifikasi','active'=>'verifikasi']);
})->middleware(['auth'])->name('verification.notice');
Route::post('/email/verification-notification', [VerificationController::class, 'sendVerificationEmail'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::get('/reset-password', [ResetPasswordController::class, 'resetForm'])->name('reset-form');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('reset-password');

// LOGIN-BERHASIL ==================================================================================================================================
Route::get('/wilujeng-sumping', [WilujengController::class, 'wilujengSumping'])->name('wilujengSumping')->middleware('auth');
Route::post('/update-aksi', [WilujengController::class, 'updateAksi'])->name('update.aksi');
Route::get('/user-login', [WilujengController::class, 'userLogin'])->name('userLogin')->middleware('auth');


//LOGIN-SISWA ==================================================================================================================================
Route::get('/loginSiswa', [AuthController::class, 'gerbangSiswa'])->name('gerbangSiswa');
Route::post('/loginSiswa', [AuthController::class, 'loginSiswa'])->name('loginSiswa');
Route::get('/logoutSiswa', [AuthController::class, 'logoutSiswa'])->name('logoutSiswa');
Route::get('/profileSiswa', [SiswaController::class, 'ProfileSiswa'])->name('ProfileSiswa')->middleware('auth'); 
Route::get('/profileSiswa/kelulusan', [SiswaController::class, 'SuratKelulusan'])->name('SuratKelulusan')->middleware(['auth:siswa']); 


// ADMIN ================================================================================================================================================
Route::get('/admin-dashboard', [AdminController::class,'adminDashboard'])->name('adminDashboard')->middleware('auth','admin');
Route::get('/admin-manajemen', [AdminController::class,'adminManajemen'])->name('adminManajemen')->middleware('auth','admin');
Route::post('/admin-tambah-user', [AdminController::class, 'userManajemenTambah'])->name('userManajemenTambah')->middleware('auth','admin');
Route::get('/admin/user/edit/{id}', [AdminController::class, 'userManajemenhEdit'])->name('userManajemenhEdit')->middleware('auth','admin');
Route::PUT('/admin/user/{id}', [AdminController::class, 'userManajemenhUpdate'])->name('userManajemenhUpdate')->middleware('auth','admin');
Route::delete('/admin/delete-user/{id}', [AdminController::class, 'hapusUser'])->name('hapusUser')->middleware('auth','admin');
Route::get('/admin/sekolah/edit/{id}', [AdminController::class, 'adminSekolahEdit'])->name('adminSekolahEdit')->middleware('auth','admin');
Route::PUT('/admin/sekolah/{id}', [AdminController::class, 'adminSekolahUpdate'])->name('adminSekolahUpdate')->middleware('auth','admin');
Route::delete('/admin/delete-sekolah/{id}', [AdminController::class, 'hapusSekolah'])->name('hapusSekolah')->middleware('auth','admin');
Route::get('/backup', [AdminController::class, 'backUP'])->name('backUP')->middleware('auth','admin');
Route::get('/restore', [AdminController::class, 'reStore'])->name('reStore')->middleware('auth','admin');

Route::get('/', function () {
    return view('Layout.Webpublic.PageLayout-Public',[
        'title' => 'SiMeSis | Model 8355',
        'title_bar' => 'Daftar Siswa',  
    ]);
});


Route::get('/siswa-dashboard',[DashBoardSiswaController::class,'siswaDashboard'])->name('siswaDashboard')->middleware('auth'); 

Route::get('/model-8355',[Model8355Controller::class,'indexSiswa8355'])->name('indexSiswa8355')->middleware('auth'); 
Route::get('/model-8355-cover',[Model8355Controller::class,'cetakCover'])->name('cetakCover')->middleware('auth'); 
Route::get('/model-8355-kelas1',[Model8355Controller::class,'cetakKelas1'])->name('cetakKelas1')->middleware('auth'); 
Route::post('/siswa/import', [Model8355Controller::class, 'importSiswa'])->name('import-Siswa');
Route::post('/siswa/update', [Model8355Controller::class, 'updateSiswa'])->name('updateSiswa');
