@extends('layout.auth')
@section('form')

<div class="row  justify-content-center p-2">

    <div class="col col-md-8 glas">
        <div class="row">
            <div class="col col-md-6 ">
                <div class="mt-4">
                    <form action="/register" method="post">
                        @csrf
                        <div class=" mb-3">
                            <input type="text" class="form-control form-control-sm glasForm" placeholder="Nama Lengkap"
                                name="name" value="{{ old('name') }}">
                        </div>
                        <div class=" mb-3">
                            <input type="text" class="form-control form-control-sm glasForm" placeholder="Username (alias)"
                                name="username" value="{{ old('name') }}">
                        </div>
                        <div class=" mb-3">
                            <input type="number" class="form-control form-control-sm glasForm" placeholder="Whastapp"
                                name="hp" value="{{ old('hp') }}">
                        </div>
                        <div class=" mb-3">
                            <input type="email" class="form-control form-control-sm glasForm" placeholder="email"
                                name="email" value="{{ old('email') }}">
                        </div>
                        <div class=" mb-3">
                            <input type="password" class="form-control form-control-sm glasForm" placeholder="passowrd"
                                name="password" value="{{ old('password') }}">
                        </div>
                        <div class=" mb-3 d-grid ">
                            <button type="submit" class="btn btn-grad btn-info shadow">DAFTAR</button>

                        </div>
                    </form>
                </div>

            </div>
            <div class="col col-md-6">
                <div class="text-center align-items-center">
                    <img src="{{ asset('assets/img/hero/ikkos.png') }}" class="img-fluid animated" alt="" style="width: 300px">
                    <h1></h1>
                    <h5 class="text-white fw-bold mb-4">REGISTRASI</h5>
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="glass">
                @error('username')
                <div class="alert alert-danger is-invalid" role="alert" style="font-size: 10pt">
                    <i class="fab fa-teamspeak"></i> Hai Gaes ... | Ada Yang Salah {{ $message }}
                </div>
                @enderror
                @error('email')
                <div class="alert alert-danger is-invalid" role="alert" style="font-size: 10pt">
                    <i class="fab fa-teamspeak"></i> Hai Gaes ... | Ada Yang Salah {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>

</div>


@endsection
