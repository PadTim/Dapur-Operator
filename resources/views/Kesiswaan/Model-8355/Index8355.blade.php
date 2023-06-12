@extends('Layout.apps.PageLayout')
@section('isi-konten')

<div class="container-fluid mt-1 ">
    <div class="card w-100 mb-1">
        <div class="card-header">
            <div class="menu-bar">
                <button class="btn btn-sm btnHijau hoverPutih text-white shadow" data-bs-toggle="modal"
                    data-bs-target="#importSiswa"><i class="fas fa-file-excel me-2"></i>IMPORT</button>
                <button class="btn btn-sm btnOrange hoverPutih text-white shadow" data-bs-toggle="modal"
                    data-bs-target="#cetak8355"><i class="fas fa-print me-2"></i>CETAK</button>
                <button class="btn btn-sm btnMerah hoverPutih text-white shadow"><i
                        class="fas fa-user-graduate me-2"></i>LULUSKAN KELAS 6</button>
            </div>
        </div>
    </div>
    <div class="card w-100  p-2">
        <div class="card-body table-responsive p-0 " style="height: 745px;">
            <table class="table fixed text-nowrap w-100" id="dtSiswa">
                <thead class="glass bg-sidebar text-white " style="font-size: 10pt">
                    <tr>
                        <th><i class="fas fa-id-card"></i></th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th><i class="fas fa-restroom"></i> </th>
                        <th><i class="fas fa-calendar-check"></i> Tempat Tanggal Lahir</th>
                        <th><i class="fas fas fa-mosque"></i> Agama</th>
                        <th><i class="fas fa-id-card"></i> NIK</th>
                        <th><i class="fas fa-file-alt"></i> KK</th>
                        <th><i class="fas fa-calendar-alt"></i> Alamat</th>
                        <th><i class="fas fa-male"></i> Ayah</th>
                        <th><i class="fas fa-female"></i> Ibu</th>
                        <th><i class="fas fa-school"></i> Kelas</th>
                        <th class="text-end pe-2" style="width: 1%">Aksi</th>

                    </tr>
                </thead>
                <style>
                    #dtSiswa td{
                        padding-top: 3px;
                        padding-bottom: 3px;
                    }
                </style>
                <tbody style="font-size: 10pt;">
                    @foreach ($siswa as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td data-editable="true"><a href="#" class="update" data-name="nis" data-type="text"
                                data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->nis }}</a></td>
                        <td data-editable="true"><a href="#" class="update" data-name="nisn" data-type="text"
                                data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->nisn }}</a></td>
                        <td data-editable="true"><a href="#" class="update" data-name="nama" data-type="text"
                                data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->nama }}</a></td>
                        <td data-editable="true"><a href="#" class="update" data-name="jk" data-type="text"
                                data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->jk }}</a></td>
                        <td data-editable="true"><a href="#" class="update" data-name="tempat_lahir" data-type="text"
                                data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->tempat_lahir }}</a>, <a href="#" id="tglLahir"
                                class="update" data-name="tanggal_lahir" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->tanggal_lahir}}
                            </a> </td>
                            
                            
                          
                            
                        <td><a href="#" class="update" data-name="agama" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->agama }}</a></td>
                        <td><a href="#" class="update" data-name="nik" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->nik }}</a></td>
                        <td><a href="#" class="update" data-name="kk" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->kk }}</a></td>
                        <td><a href="#" class="update" data-name="alamat" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->alamat }}</a></td>
                        <td><a href="#" class="update" data-name="nama_ayah" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->nama_ayah }}</a></td>
                        <td><a href="#" class="update" data-name="nama_ibu" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->nama_ibu }}</a></td>
                        <td data-editable="true"><a href="#" class="update" data-name="kelas_id" data-type="text"
                            data-pk="{{ $siswa->id }}"
                            style="text-decoration: none;color:black;">{{ $siswa->kelas_id }}</a> |
                            <a href="#" class="update" data-name="rombel_id" data-type="text"
                                    data-pk="{{ $siswa->id }}"
                                    style="text-decoration: none;color:black;">{{ $siswa->rombel_id }}</a></td>
                        <td class="text-end"> <a
                                class="btn btn-sm bg-gradient bg-orange text-white  px-1 py-0 dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cart-plus fa-xs"></i>
                            </a>
                            <div class="dropdown">
                                <ul class="dropdown-menu" style="font-size: 10pt;">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-graduation-cap"></i> Naik
                                            Kelas</a></li>
                                    <li><a class="dropdown-item text-warning" href="#"><i
                                                class="fas fa-thumbs-down"></i> Tinggal Kelas</a></li>
                                    <li>
                                        <form action="#" method="POST" style="display: inline-block;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a class="dropdown-item text-danger" type="submit" title="Hapus SPJ"
                                                onclick="return confirm('Jika Anda Menghapus Ini ada Beberapa Postingan anda Hilang, Yakin Mau diHapus ??!!')"><i
                                                    class="fas fa-trash"></i> Keluarkan</a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>

            </table> 
            
        </div>

    </div>

</div>

<!-- Modal IMPOR SISWA -->
<div class="modal fade glass" id="importSiswa" tabindex="-1" aria-labelledby="importSiswa" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content bg-transparent">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bolder" id="importSiswa" style="color: chartreuse;"><i class="fas fa-file-upload"></i> IMPORT SISWA
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('import-Siswa') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <input type="file" class="form-control" id="file" name="file">
                    </div>

                    <button type="submit" class="btn btn-block btnHijau text-white fw-bold">Import</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal IMPOR SISWA -->
<div class="modal fade glass" id="cetak8355" tabindex="-1" aria-labelledby="cetak8355" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content bg-transparent">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bolder" id="cetak8355" style="color:#fff;"><i class="fas fa-file-upload"></i> CETAK MODEL 8355
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                   <div class="col">
                    <div class="d-grid gap-1">
                        <a href="/model-8355-cover" class="btn btn-block btnMerah hoverPutih text-white fw-bold" target="_blank">COVER</a>
                        <a href="" class="btn btn-block btnOrange hoverPutih text-white fw-bold">IDENTITAS</a>
                    </div>
                   </div>
                   <div class="col">
                    <div class="d-grid gap-1">
                        <a href="/model-8355-kelas1" class="btn btn-block btnKuning hoverPutih text-white fw-bold" target="_blank">KELAS 1</a>
                        
                        <a href="" class="btn btn-block btnTron hoverPutih text-white fw-bold">KELAS 2</a>
                        <a href="" class="btn btn-block btnBiru hoverPutih text-white fw-bold">KELAS 3</a>
                        
                    </div>
                   </div>
                   <div class="col">
                    <div class="d-grid gap-1">
                        
                        <a href="" class="btn btn-block btnHijau hoverPutih text-white fw-bold">KELAS 4</a>
                        <a href="" class="btn btn-block btnJingga hoverPutih text-white fw-bold">KELAS 5</a>
                        <a href="" class="btn btn-block btnUngu hoverPutih text-white fw-bold">KELAS 6</a>
                    </div>
                   </div>
                </div>
                
                </div>

        </div>
    </div>
</div>




<script type="text/javascript">
    $.fn.editable.defaults.mode = 'inline';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $(document).ready(function () {
    var table = $('#dtSiswa').DataTable({
        lengthMenu: [20, 30, 50, 100],
        language: {
            search: 'Cari di sini'
        },
        pagingType: 'numbers',
        drawCallback: function () {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm');
            initEditable(); // Panggil inisialisasi X-Editable setiap kali tabel diperbarui
        }
    });

    // Inisialisasi X-Editable
    function initEditable() {
        $('.update').editable({
            url: "{{ route('updateSiswa') }}",
            type: 'text',
            showbuttons: false,
        });
    }

    initEditable(); // Panggil inisialisasi X-Editable saat halaman pertama dimuat
});
</script>





<style>
input#tglLahir{
    border:none;
    width: auto;
}
</style>



@endsection
