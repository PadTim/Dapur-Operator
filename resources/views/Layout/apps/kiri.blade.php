
<!-- Modal -->
<div class="modal fade" id="profil" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
    style="background: none;">
    <div class="modal-dialog shadow-lg text-white" style="background: none;">
        <div class="modal-content glass" style="background: none;">
            <div class="modal-header glass" style="background: none;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Hai ... {{ Auth::user()->name }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-footer glass">
                <button type="button" class="btn bg-gradient bg-navy shadow" data-bs-dismiss="modal">Kembali</button>
                <a href="/profile-edit" class="btn bg-gradient bg-fuchsia shadow">Edit Profil</a>
                <a href="/logout" class="btn bg-gradient bg-maroon shadow">LogOut</a>
            </div>
        </div>
    </div>
</div>

<aside  class="main-sidebar  elevation-4 glass bg-sidebar">

    <!-- Brand Logo -->
    <div class="brand-link p-2 border-0 ">
        <div class="card p-2 glass shadow">
            <img src="{{ asset('assets/img/logo/ikkos.png') }}" alt="IKKOS Logo">
        </div>
    </div>

    <div class="sidebar">

        @auth
        <div class="user-panel dark mt-3 py-1 mb-1 d-flex glass btnq-kuning shadow bg-silver border-1 rounded"
            data-bs-toggle="modal" data-bs-target="#profil">
            <div class="image">
                <img src="{{ asset('assets/img/profile/' . Auth::user()->pp) }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a class="d-block text-white " target="_blank"
                    style="text-decoration: none">{{ Auth::user()->name }}</a>

            </div>

        </div>
        @else

        @endauth

        <nav class="mt-5">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                @can('admin')


                <li class="nav-item">
                    <a href="#" class="nav-link glass shadow glass-hijau" style="color: greenyellow">
                        <i class="fab fa-accusoft nav-icon"></i>
                        <p>
                            Adminsitrator
                            <i class="right fab fa-teamspeak"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin-dashboard" class="nav-link glass-hijau-link" >

                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-manajemen" class="nav-link glass-hijau-link">
                                <i class="fas fa-laptop-house nav-icon"></i>
                                <p>Manajemen</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/cv-win-win/1" class="nav-link glass-hijau-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Profile Perusahaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/backup" class="nav-link glass-hijau-link">
                                <i class="fas fa-laptop-medical nav-icon"></i>
                                <p>BackUp</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link glass shadow glass-pink" style="color:rgb(255, 152, 186)">
                        <i class="fas fa-file-invoice nav-icon"></i>
                        <p>
                            E-SPJ
                            <i class="right fab fa-teamspeak"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/referensi" class="nav-link glass-pink-link">
                                <i class="fas fa-file-signature nav-icon"></i>
                                <p>Referensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spj-bop" class="nav-link glass-pink-link">
                                <i class="fas fa-file-signature nav-icon"></i>
                                <p>Input BOP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spj-bos" class="nav-link glass-pink-link">
                                <i class="fas fa-file-signature nav-icon"></i>
                                <p>Input BOS</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                @endcan

                <li class="nav-item">
                    <a href="#" class="nav-link glass shadow glass-tron" style="color: aqua">
                        <i class="fab fa-accusoft nav-icon"></i>
                        <p>
                            Dashboard
                            <i class="right fab fa-teamspeak"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link glass-tron-link">
                                <i class="fas fa-home nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/user-login" class="nav-link glass-tron-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/logout" class="nav-link hvq">
                                <i class="fas fa-door-open nav-icon"></i>
                                <p>Keluar</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link glass shadow glass-hijau" style="color:greenyellow">
                        <i class="fas fa-cash-register nav-icon"></i>
                        <p>
                            Ngereng
                            <i class="right fab fa-teamspeak"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/referensi" class="nav-link glass-hijau-link">
                                <i class="fas fa-file-signature nav-icon"></i>
                                <p>Referensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/ngereng-bop" class="nav-link glass-hijau-link">
                                <i class="fas fa-file-signature nav-icon"></i>
                                <p>Input BOP</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/spj-bos" class="nav-link glass-hijau-link">
                                <i class="fas fa-file-signature nav-icon"></i>
                                <p>Input BOS</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link glass shadow glass-pink" style="color:rgb(255, 152, 186)">
                        <i class="fas fa-id-card nav-icon"></i>
                        <p>
                            Kesiswaan
                            <i class="right fab fa-teamspeak"></i>
                        </p>
                    </a>
                    
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/siswa-dashboard" class="nav-link glass-hijau-link" >
    
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/model-8355" class="nav-link glass-pink-link">
                                <i class="fas fa-address-card nav-icon"></i>
                                <p>8355</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/anbk" class="nav-link glass-pink-link">
                                <i class="fas fa-laptop-house nav-icon"></i>
                                <p>ANBK</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/aplikasi-kelulusan" class="nav-link glass-pink-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Kelulusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/alumni" class="nav-link glass-pink-link">
                                <i class="fas fa-user-graduate nav-icon"></i>
                                <p>Almuni</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                  <a href="#" class="nav-link glass shadow glass-kuning" style="color: rgb(238, 255, 0)">
                    <i class="nav-icon fas fas fa-mail-bulk"></i>
                    <p>
                      E-Surat
                      <i class="right fab fa-teamspeak"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link glass-kuning-link">
                        <i class="fas fa-laptop-house nav-icon"></i>
                        <p>Dashboard</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link glass-kuning-link">
                        <i class="fas fa-envelope-open nav-icon"></i>
                        <p>Surat Masuk</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link glass-kuning-link">
                        <i class="fas fa-envelope nav-icon"></i>
                        <p>Surat Keluar</p>
                      </a>
                    </li>
                  </ul>
                </li>

                


    

                <li class="nav-item">
                    <a href="#" class="nav-link glass shadow glass-biru" style="color: greenyellow">
                        <i class="fas fas fa-blog nav-icon"></i>
                        <p>
                            Blog Post
                            <i class="right fab fa-teamspeak"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/gallery" class="nav-link glass-biru-link">
                                <i class="fas fa-images nav-icon"></i>
                                <p>Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard-mading" class="nav-link glass-biru-link">
                                <i class="fas fas fa-newspaper nav-icon"></i>
                                <p>Mading Sekolah</p>
                            </a>
                        </li>

                    </ul>
                </li>
             

            </ul>
        </nav>

    </div>

</aside>
