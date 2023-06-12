@extends('layout.apps.PageLayout')
@section('isi-konten')
LOGIN SISWA
<section class="content mt-2">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-3 col-md-6">

                <div class="card card-pink card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('assets/img/siswa/'.$siswa->pp) }}" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>
                        <p class="text-muted text-center">{{ auth()->user()->nopes }}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NIS</b> <a class="float-right"
                                    style="text-decoration: none">{{ auth()->user()->nis }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>NISN</b> <a class="float-right"
                                    style="text-decoration: none">{{ auth()->user()->nisn }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Tempat Lahir</b> <a class="float-right"
                                    style="text-decoration: none">{{ auth()->user()->tlahir }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Tanggal</b> <a class="float-right"
                                    style="text-decoration: none">{{ date('d-m-Y', strtotime(auth()->user()->tgllahir)) }}</a>
                            </li>

                        </ul>
                        <a href="{{ route('SuratKelulusan') }}" class="btn btn-primary btn-block"><b>LIHAT
                                KELULUSAN</b></a>
                        <a href="/logoutSiswa" class="btn btn-danger btn-block"><b>KELUAR</b></a>
                    </div>

                </div>


                <div class="card bg-gradient card-indigo">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>

                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Pendidikan</strong>
                        <p class="text-muted">
                            #
                        </p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                        <p class="text-muted">#</p>
                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Hobi</strong>
                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                        <p class="text-muted">#</p>
                    </div>

                </div>

            </div>

            <div class="col-xl-9 col-md-6">
                <div class="card card-pink card-outline">
                    <div class="card-header">
                      <h6> <i class="fas fa-bullhorn"></i> Daftar Postingan</h6> 
                    </div>
                    <div class="card-body">
                        <p>
                            Setelah anda dinyatakan Lulus, silahkan isi Buku Almuni <br> <br>
                            <button class="btn bg-gradient bg-orange text-white fw-bold">UPDATE BUKU ALMUNI</button>
                        </p>
                        

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection