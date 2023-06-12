@extends('layout.apps.PageLayout')
@section('isi-konten')

<div class="container-fluid mt-1 ">
    <div class="card w-100 mb-1">
        <div class="card-header">
            <div class="menu-bar">
                <button class="btn btn-sm btnHijau hoverPutih text-white shadow" data-bs-toggle="modal"
                    data-bs-target="#importSiswa"><i class="fas fa-file-excel me-2"></i>IMPORT</button>
                <button class="btn btn-sm btnOrange hoverPutih text-white shadow"><i
                        class="fas fa-print me-2"></i>CETAK</button>
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
                <tbody style="font-size: 10pt">
                    @foreach ($siswa as $siswa)
                    <tr>
                        <td>1</td>
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
                                style="text-decoration: none;color:black;">{{ $siswa->tempat_lahir }}</a>, <a href="#"
                                class="update" data-name="tanggal_lahir" data-type="text" data-pk="{{ $siswa->id }}"
                                style="text-decoration: none;color:black;">{{ $siswa->tanggal_lahir }}</a> </td>
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
                <h1 class="modal-title fs-5 fw-bolder" id="importSiswa"><i class="fas fa-file-upload"></i> IMPORT SISWA
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('importSiswa') }}" method="POST" enctype="multipart/form-data">
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

<script>
    $.fn.poshytip = {
        defaults: null
    }

</script>
<script type="text/javascript">
    $.fn.editable.defaults.mode = 'inline';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $(document).ready(function () {
        // Inisialisasi DataTables
        $('#dtSiswa').DataTable({
            lengthMenu: [17, 30, 50, 100],
            language: {
                search: 'Cari di sini'
            },
            pagingType: 'numbers',
            drawCallback: function () {
                $('.dataTables_paginate > .pagination').addClass(
                    'pagination-sm'); // Menambahkan kelas CSS "pagination-sm"
            }
        });

        // Inisialisasi X-Editable
        $('.update').editable({
            url: "{{ route('updateSiswa') }}",
            type: 'text',
            showbuttons: false,
        });
    });

</script>


@endsection
