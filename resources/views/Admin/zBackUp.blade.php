@extends('layout.App.PageLayout')
@section('isi-konten')
<style>
    .title-bar {
        display: flex;
        font-family: Fredoka One;
        font-size: 20pt;
    }

</style>



<div class="container-fluid mt-1  glass d-flex">
    <div class="title-bar">
        <div><i class="fas fa-laptop-house me-2"></i>BACKUP - RESTORE </div>
    </div>
</div>
@include('layout.App.xNotifikasix')

<section class=" mt-2">
    <div class="container-fluid m-0 ">
        <div class="card card card-pink card-outline mb-0 ">
            <div class="card-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-backup-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-backup" type="button" role="tab" aria-controls="pills-backup"
                            aria-selected="true">BACKUP</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-restore-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-restore" type="button" role="tab" aria-controls="pills-restore"
                            aria-selected="false">RESTORE</button>
                    </li>
                    
                </ul>
            </div>
            <div id="isi-Manajemen">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-backup" role="tabpanel"
                        aria-labelledby="pills-backup-tab" tabindex="0">
                        <div class="container-fluid pb-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="img-backup">
                                        <img class="img-fluid p-2" src="{{ asset('assets/img/iconPNG/database.png') }}" alt="">
                                    </div>
                                    <form  method="POST" action="{{ route('backUP') }}">
                                        @csrf
                                        @method('POST')
                                        <button class="btn bg-lime w-100 text-white fw-bold mt-1 mb-1" type="submit"><i
                                                class="fas fa-download"></i> BACKUP</button>
                                    </form>
                                </div>
                                <div class="col p-2">
                                    <div class="position-relative p-3 bg-gray" style="height: 100%">
                                    <div class="ribbon-wrapper ribbon-xl">
                                    <div class="ribbon bg-warning text-lg">
                                    BACKUP
                                    </div>
                                    </div>
                                   Lakukan Backup Secara Berkala <br>
                                   File Backup Tersimpan di Folder Storage/Backup<br> 
                                   Proses Backup Juga Bisa di Lakukan melaui icon shortcut Backup pada folder Utama <br>
                                    <small> -==-</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                       
                    </div>
                    <div class="tab-pane fade" id="pills-restore" role="tabpanel" aria-labelledby="pills-restore-tab"
                        tabindex="0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-2">
                                    <div class="img-backup">
                                        <img class="img-fluid p-2" src="{{ asset('assets/img/iconPNG/backup.png') }}" alt="">
                                    </div>
                                    <form method="post" action="{{ route('reStore') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input class="form-control form-control-sm glass" id="file" type="file"
                                            name="file" accept=".sql">
                                        <button class="btn btn-sm bg-warning w-100 text-white fw-bold mt-1"><i
                                                class="fas fa-upload"></i> RESTORE</button>
                                    </form>
                                </div>
                                <div class="col p-2">
                                    <div class="position-relative p-3 bg-gray" style="height: 100%">
                                    <div class="ribbon-wrapper ribbon-xl">
                                    <div class="ribbon bg-maroon text-lg">
                                    RESTORE
                                    </div>
                                    </div>
                                   Perhatian !!!<br>
                                   file yang tidak sesuai dapat menyebabkan kerusakan/ kehilangan data saat ini  <br> 
                                   <br>
                                    <small> -==-</small>
                                    </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>


<!-- Modal -->
<div class="modal fade glass-modal-putih" id="tambahUser" tabindex="-1" aria-labelledby="tambahUser" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('userManajemenTambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-white" id="tambahUser"><i class="fas fa-users"></i> Tambah Pengguna
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">NPSN</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="username">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">Nama Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="nama_sekolah">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">Nama Operator</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="name">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">Whatsapp</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="hp">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">Email</label>
                        <div class="col-sm-10">
                            <input type="email"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="email">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">Password</label>
                        <div class="col-sm-10">
                            <input type="password"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="password">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-2 col-form-label ">Jenis Akun</label>
                        <div class="col-sm-10">
                            <select class="form-select bg-transparent glass neon-hover-putih" name="is_admin">
                                <option selected> </option>
                                <option value="1">Admin</option>
                                <option value="0">User</option>
                             </select>
                        </div>
                    </div>

                    <div class="row mb-3 text-white">
                        <label class="col col-form-label">
                            <img class="img-thumbnail" id="previewUser" src="{{ asset('assets/img/profile/user.jpg') }}" alt="">
                        </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control bg-transparent glass neon-hover-putih" name="pp" id="fotoUserInput">
                        </div>
                    </div>
                 </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm bg-gradient bg-pink neon-hover-putih">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Modal -->

<script>
    document.getElementById('fotoUserInput').addEventListener('change', function(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            document.getElementById('previewUser').src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    });
  </script>


@endsection
