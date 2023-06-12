@extends('Layout.apps.PageLayout')
@section('isi-konten')

<section class=" mt-2">
    <div class="container-fluid m-0 ">
        <div class="card card card-pink card-outline mb-0 ">
            <div class="card-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Daftar Sekolah</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Daftar User</button>
                    </li>
                    
                </ul>
            </div>
            <div id="isi-Manajemen">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <table class="table table-head-fixed text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>IDS</th>
                                    <th>NPSN</th>
                                    <th>NPWP</th>
                                    <th>Nama Sekolah</th>
                                    <th>Nama Kepala Sekolah</th>
                                    <th>Nama Bendahara</th>
                                    <th>Nama Pengurus Barang</th>
                                    <th>Alamat</th>

                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                    </li> --}}
                                @foreach ($sekolah as $sekolah)
                                <tr  style="font-size: 10pt">
                                    <td>{{ $sekolah->id }}</td>
                                    <td>{{ $sekolah->npsn }}</td>
                                    <td>{{ $sekolah->npwp }}</td>
                                    <td>{{ $sekolah->nama_sekolah }}</td>
                                    <td>{{ $sekolah->nama_kepsek }}</td>
                                    <td>{{ $sekolah->nama_bendahara }}</td>
                                    <td>{{ $sekolah->nama_pengurus_barang }}</td>
                                    <td>{{ $sekolah->alamat_sekolah }}</td>
                                    <td class="text-end">
                                        <a href="{{route('adminSekolahEdit',['id'=>$sekolah->id])}}"  class="btn btn-sm bg-warning disable "><i class="fas fa-pencil-alt fa-xs"></i></a>
                                        <form action="{{ route('hapusSekolah', $sekolah->id) }}" method="POST"
                                            style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm bg-maroon disable "
                                                onclick="return confirm('Jika Anda Menghapus Ini ada Beberapa Postingan anda Hilang, Yakin Mau diHapus ??!!')"><i
                                                    class="fas fa-trash fa-xs"></i></button>
                                        </form>
                                    </td>
                                        
                                   
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <table class="table table-head-fixed text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th></th>
                                    <th>Nama</th>
                                    <th></th>
                                    <th>Username</th>
                                    <th>email</th>
                                    <th>Registrasi</th>
                                    <th>Role</th>
                                    <th>Aktivasi</th>
                                    <th>Status</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img alt="Avatar" class="img-circle elevation-2"
                                            src="{{ asset('assets/img/profile/'.$user->pp) }}" style="width: 30px">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    @if ($user->sekolah)
                                    <td>{{ $user->sekolah->nama_sekolah }}</td>
                                    @else
                                     <td>-</td>
                                    @endif
                                   
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                                    <td>
                                        <badge
                                            class="badge {{ $user->is_admin == 1 ? 'bg-indigo' : 'bg-fuchsia' }} rounded">
                                            {{ $user->is_admin == 1 ? 'Admin' : 'User' }}</badge>
                                    </td>
                                    <td>
                                        @if($user->email_verified_at)
                                        <badge class="badge bg-info rounded">Aktiv</badge>
                                        @else
                                        <badge class="badge bg-danger rounded">Belum Aktivasi</badge>
                                        @endif
                                    </td>
                                    <td>
                                        <badge
                                            class="badge {{ $user->is_online == 1 ? 'bg-lime' : 'bg-secondary' }} rounded">
                                            {{ $user->is_online == 1 ? 'Online' : 'Offline' }}</badge>
                                    </td>
                                    <td class="text-end"><a href="{{ route('userManajemenhEdit', ['id' => $user->id]) }}" class="btn btn-sm bg-orange disable"> <i
                                        class="fas fa-user-cog text-white fa-xs"></i></a>
                                        <form action="{{ route('hapusUser', $user->id) }}" method="POST"
                                            style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm bg-maroon disable "
                                                onclick="return confirm('Jika Anda Menghapus Ini ada Beberapa Postingan anda Hilang, Yakin Mau diHapus ??!!')"><i
                                                    class="fas fa-trash fa-xs"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-spjBOS" role="tabpanel" aria-labelledby="pills-spjBOS-tab"
                        tabindex="0">
                        <table class="table table-head-fixed text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>No Faktur</th>
                                    <th>Tanggal</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jumlah</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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
                        <label class="col-sm-3 col-form-label ">NPSN</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="username">
                        </div>
                        
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Nama Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="nama_sekolah">
                        </div>
                        
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Nama Kop Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="nama_kop_sekolah">
                        </div>
                        
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Nama Operator</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="name">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Whatsapp</label>
                        <div class="col-sm-9">
                            <input type="text"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="hp">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Email</label>
                        <div class="col-sm-9">
                            <input type="email"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="email">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Password</label>
                        <div class="col-sm-9">
                            <input type="password"
                                class="form-control form-control-sm bg-transparent text-white glass neon-hover-putih"
                                name="password">
                        </div>
                    </div>
                    <div class="row mb-3 text-white">
                        <label class="col-sm-3 col-form-label ">Jenis Akun</label>
                        <div class="col-sm-9">
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
                        <div class="col-sm-9">
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