@extends('layout.auth')
@section('form')

<div class="row  justify-content-center p-2">

    <div class="col col-md-8 glas">
        <div class="row">
            <div class="col col-md-6 ">
                <div class="mt-4">
                    <form action="{{ route('reset-password') }}" method="POST">
                        @csrf
                        <div class=" mb-3">
                            <input type="email" class="form-control form-control-sm glasForm" placeholder="email"
                                name="email" value="{{ old('email') }}">
                        </div>
                        <div class=" mb-3">
                            <input type="password" class="form-control form-control-sm glasForm" placeholder="passowrd"
                                name="password" value="{{ old('password') }}">
                        </div>
                        <div class=" mb-3">
                            <input type="password" class="form-control form-control-sm glasForm" placeholder="Konfirmasi Password"
                                name="password_confirmation" value="{{ old('password_confirmation') }}">
                        </div>
                        <div class=" mb-3 d-grid ">
                            <button type="submit" class="btn btn-grad btn-info shadow">RESET</button>
                            <a href="/login" class="btn btn-grad btn-info shadow mt-1">LOGIN</a>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col col-md-6">
                <div class="text-center align-items-center">
                    <img src="{{ asset('assets/img/hero/ikkos.png') }}" class="img-fluid animated" alt="" style="width: 300px">
                    <h1></h1>
                    <h5 class="text-white fw-bold mb-4">RESET PASSWORD</h5>
                </div>
            </div>

        </div>
        <div class="row ">
            @error('password')
                <div class="alert alert-danger is-invalid" role="alert" style="font-size: 10pt">
                    <i class="fab fa-teamspeak"></i> Hai Gaes ... | Ada Yang Salah {{ $message }}
                </div>
                @enderror

            <div class="glass">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
           
          
            </div>
        </div>
    </div>

</div>


@endsection
