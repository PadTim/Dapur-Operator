@extends('Layout.apps.PageLayout')
@section('isi-konten')

<section>
    <div class="position-relative p-3 bg-gray" style="height: 180px">
        <div class="ribbon-wrapper ribbon-xl">
        <div class="ribbon bg-danger text-xl">
            EDIT USER
        </div>
        </div>
      
        <small>
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-3">
                        <form action="{{ route('updateUsers', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col col-md-4">
                                    <img src="{{ asset('assets/img/profile/'.$user->pp) }}"
                                        class="img-thumbnail w-100" alt="user">
                                    <div class="mt-1">
                                        <input class="form-control form-control-sm glass" id="pp-upload"
                                            type="file" name="pp" value="Pilih Gambar" accept="image/*">
                        
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-sm " id=""
                                            name="name" value="{{ $user->name }}">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control form-control-sm" id=""
                                            name="username" value="{{ $user->username }}" >
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Whatsapp</label>
                                        <input type="text" class="form-control form-control-sm" id="" name="hp"
                                            value="{{ $user->hp }}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleFormControlInput1" class="form-label">Email
                                            address</label>
                                        <input type="email" class="form-control form-control-sm" id=""
                                            name="email" value="{{ $user->email }}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleFormControlInput1"
                                            class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-sm" id=""
                                            name="password" value="{{ $user->password }}">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleFormControlInput1"
                                            class="form-label">Role</label>
                                            <select class="form-select" aria-label="Default select example" name="is_admin">
                                                <option selected>Jenis Akun</option>
                                                <option value="0">User</option>
                                                <option value="1">Admin</option>
                                            </select>
                                    </div>
                        
                                    
                                    <div class="mt-4">
                                        <button class="btn btn-sm bg-gradient bg-pink w-100" id="formFileSm"
                                            type="submit">UPDATE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
            
        </small>
        
        </div>
</section>




@endsection