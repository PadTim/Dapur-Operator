@extends('Layout.Apps.PageLayout')
@section('isi-konten')
<style>
    .bg-erkas {
        width: 100vw;
        height: 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .bg-erkas img {
        width: 100%;
        height: 900px;
        background-position: center;
        background-size: cover;
    }

    .content {
        position: relative;
        z-index: 1;
    }

</style>

<div class="bg-erkas">
    <img src="{{ asset('assets/img/bg-themes/bg-pink.jpg') }}" alt="">
</div>

<section class="content mt-2">
    <div class="container-fluid glass rounded shadow mb-2">
        @foreach ($tahunAktif as $t)
        <h1 class="text-white" style="font-family:DotMatrix;text-shadow: #fc0 1px 0 10px;"> <i
                class="fas fa-laptop-house nav-icon me-2"></i>Selamat Datang Di Dapur Operator {{ $t->nama_tahun }}</h1>
        @endforeach
    </div>
</section>

  <div class="modal fade glass" id="importRekanan" tabindex="-1" aria-labelledby="importRekanan" aria-hidden="true">
    <div class="modal-dialog ">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">IMPORT REKANAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="importRekanan" name="file">
                <button class="input-group-text bg-success" for="importRekanan" type="submit">Import</button>
              </div>
               
           
        </div>
        
      </div>
    </form>
    </div>
  </div>
<section id="Profile-Aktive">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-danger card-outline mb-0 ">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('assets/img/profile/'.auth()->user()->pp) }}" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                        @if (auth()->check() && auth()->user()->sekolah)
                        <p class="text-muted text-center">{{ auth()->user()->sekolah->nama_sekolah }}</p>
                        @else
                        <p class="text-muted text-center">Super Admin</p> 
                        @endif

                       
                    </div>
                </div>
                <div class="card card-indo card-outline mt-1 mb-0">
                    <div class="card-body">
                        <a href="/profile-edit" class="btn bg-gradient bg-info btn-block"><b>UPDATE PROFILE</b></a>
                        @if (auth()->user()->sekolah)
                        <a href="{{ route('userSekolahEdit', auth()->user()->sekolah->id) }}" class="btn bg-gradient bg-maroon btn-block"><b>UPDATE SEKOLAH</b></a>
                        @endif
                    </div>
                </div>
                
                {{-- @if (auth()->check() && auth()->user()->sekolah)
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>

                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>
                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>
                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                        <p class="text-muted">{{ auth()->user()->sekolah->alamat_sekolah }}</p>
                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>
                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum
                            enim neque.</p>
                    </div>

                </div>
                @endif --}}
            </div>

            <div class="col-md-9">
                <div class="card card-danger card-outline">
                    <div class="card-body">
                        @if (auth()->user()->sekolah)
                        <table class=" table-sm table-responsive mt-1 mb-4 ">
                            <tbody>
                                <tr>
                                    <td> NPSN</td>
                                    <td>:</td>
                                    <td><span class="badge bg-success">{{ auth()->user()->sekolah->npsn }}</span></td>
                                </tr>
                                <tr>
                                    <td> NPWP</td>
                                    <td>:</td>
                                    <td><span class="badge bg-success">{{ auth()->user()->sekolah->npwp }}</span></td>
                                </tr>
                                <tr>
                                    <td>Nama Sekolah</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->sekolah->nama_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekolah</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->alamat_sekolah}}</td>
                                </tr>
                                <tr>
                                    <td>RT/RW</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->rt}} / {{auth()->user()->sekolah->rw}}</td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->kel}}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td> {{auth()->user()->sekolah->kec}}</td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->kota}}</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->prov}}</td>
                                </tr>
                                <tr>
                                    <td>Kode POS</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->kodepos}}</td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->email}}</td>
                                </tr>
                                <tr>
                                    <td>Telp</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->telp}}</td>
                                </tr>
                                <tr>
                                    <td>Kepala Sekolah</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->nama_kepsek}}</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td>{{ auth()->user()->sekolah->nip_kepsek }}</td>
                                </tr>
                                <tr>
                                    <td>Bendahara</td>
                                    <td>:</td>
                                    <td> {{auth()->user()->sekolah->nama_bendahara}}</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td> {{auth()->user()->sekolah->nip_bendahara}}</td>
                                </tr>
                                <tr>
                                    <td>Pengurus Barang</td>
                                    <td>:</td>
                                    <td> {{auth()->user()->sekolah->nama_pengurus_barang}}</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td> {{auth()->user()->sekolah->nip_pengurus_barang}}</td>
                                </tr>
                                <tr>
                                    <td>Pengawas Sekolah</td>
                                    <td>:</td>
                                    <td>{{auth()->user()->sekolah->nama_pengawas}}</td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td>:</td>
                                    <td> {{auth()->user()->sekolah->nip_pengawas}}</td>
                                </tr>
                            </tbody>
                        </table>
                        @else
                        <h3>PROFILE PERUSAHAAN</h3>
                        @endif

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
