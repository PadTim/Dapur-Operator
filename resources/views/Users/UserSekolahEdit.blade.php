@extends('layout.App.PageLayout')
@section('isi-konten')

<section class="content mt-2">
<form action="{{ route('userSekolahUpdate', $sekolah->id) }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
<div class="card glass col col-sm-7 mt-3 ">
            <div class="card-header" style="background: none;">
               <h3 > <b>{{ $title }}</b></h3>
            </div>
            <div class="card-body ">
                <div class="row  g-2 mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">NPSN</label>
                    <div class="col-sm">
                      <input type="text" class="form-control form-control-sm glass" name="npsn" value="{{ $sekolah->npsn }}" >
                    </div>
                    <label class="col-sm-1 col-form-label col-form-label-sm text-end">NPWP</label>
                    <div class="col-sm">
                      <input type="text" class="form-control form-control-sm glass" name="npwp" value="{{ $sekolah->npwp }}" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Nama Sekolah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm glass" name="nama_sekolah" value="{{ $sekolah->nama_sekolah }}" >
                    </div>
                  </div>
                <div class="row mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-control-sm glass" name="alamat_sekolah" value="{{ $sekolah->alamat_sekolah }}" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm"></label>
                    <div class="col-sm-10">
                        <div class="row  g-2 mb-1">
                            <div class="col-sm-2">
                              <input type="text" class="form-control form-control-sm glass" placeholder="RT" name="rt" value="{{ $sekolah->rt }}" >
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control form-control-sm glass" placeholder="RW" name="rw" value="{{ $sekolah->rw }}" >
                            </div>
                            <div class="col-sm">
                              <input type="text" class="form-control form-control-sm glass" placeholder="Kelurahan" name="kel" value="{{ $sekolah->kel }}" >
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control form-control-sm glass" placeholder="Kecamatan" name="kec" value="{{ $sekolah->kec }}" >
                              </div>

                          </div>
                          <div class="row g-2 mb-1">
                            
                              <div class="col-sm">
                                <input type="text" class="form-control form-control-sm glass" placeholder="Kota" name="kota" value="{{ $sekolah->kota }}" >
                              </div>
                              <div class="col-sm">
                                <input type="text" class="form-control form-control-sm glass" placeholder="Provinsi" name="prov" value="{{ $sekolah->prov }}" >
                              </div>
                              <div class="col-sm">
                                <input type="text" class="form-control form-control-sm glass" placeholder="Kode POS"name="kodepos" value="{{ $sekolah->kodepos }}" >
                              </div>
                          </div>
                          <div class="row g-2 ">
                            
                            <div class="col-sm">
                              <input type="text" class="form-control form-control-sm glass" placeholder="telp" name="tlp" value="{{ $sekolah->tlp }}" >
                            </div>
                            <div class="col-sm">
                              <input type="text" class="form-control form-control-sm glass" placeholder="email" name="email" value="{{ $sekolah->email }}" >
                            </div>

                        </div>
                    </div>
                  </div>
                  <div class="row ">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Kepala Sekolah</label>
                    <div class="col-sm-10">
                        <div class="row g-2 mb-1">
                            
                            <div class="col-sm-7">
                              <input type="text" class="form-control form-control-sm glass" placeholder="nama" name="nama_kepsek" value="{{ $sekolah->nama_kepsek }}">
                            </div>
                            <div class="col-sm-5">
                              <input type="text" class="form-control form-control-sm glass" placeholder="NIP" name="nip_kepsek" value="{{ $sekolah->nip_kepsek }}">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Bendahara</label>
                    <div class="col-sm-10">
                        <div class="row g-2 mb-1">
                            
                            <div class="col-sm-7">
                              <input type="text" class="form-control form-control-sm glass" placeholder="nama" name="nama_bendahara" value="{{ $sekolah->nama_bendahara }}">
                            </div>
                            <div class="col-sm-5">
                              <input type="text" class="form-control form-control-sm glass" placeholder="NIP" name="nip_bendahara" value="{{ $sekolah->nip_bendahara }}">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row ">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Pengurus Barang</label>
                    <div class="col-sm-10">
                        <div class="row g-2 mb-1">
                            
                            <div class="col-sm-7">
                              <input type="text" class="form-control form-control-sm glass" placeholder="nama" name="nama_pengurus_barang" value="{{ $sekolah->nama_pengurus_barang }}">
                            </div>
                            <div class="col-sm-5">
                              <input type="text" class="form-control form-control-sm glass" placeholder="NIP" name="nip_pengurus_barang" value="{{ $sekolah->nip_pengurus_barang }}">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row ">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Pengawas Sekolah</label>
                    <div class="col-sm-10">
                        <div class="row g-2 mb-1">
                            
                            <div class="col-sm-7">
                              <input type="text" class="form-control form-control-sm glass" placeholder="nama" name="nama_pengawas" value="{{ $sekolah->nama_pengawas }}">
                            </div>
                            <div class="col-sm-5">
                              <input type="text" class="form-control form-control-sm glass" placeholder="NIP" name="nip_pengawas" value="{{ $sekolah->nip_pengawas }}">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Logo Sekolah</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control form-control-sm glass" name="logo_sekolah" value="{{ $sekolah->logo_sekolah }}" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Foto Kepala Sekolah</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control form-control-sm glass" name="foto_kepsek" value="{{ $sekolah->foto_kepsek }}" accept="image/*">
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Foto Sekolah</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control form-control-sm glass" name="foto_sekolah" value="{{ $sekolah->foto_sekolah }}" >
                    </div>
                  </div>
            </div>
            
            <div class="modal-footer p-2 ">
                <a href="/sekolah/1" type="button" class="btn btn-warning btnq-cristal btn-merah text-white me-3">BATAL</a>
                <button type="submit" class="btn btn-success btnq-cristal btn-hijau text-white me-3" style="margin-left: 10px">UPDATE</button>
            </div>
        </div>
        
</form>             
</section>

@endsection

