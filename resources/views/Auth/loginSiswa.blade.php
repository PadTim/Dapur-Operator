@extends('Layout.auth.auth')
@section('form')

<div class="row  justify-content-center p-2">
              
  <div class="col col-md-6 glas" style="width: 450px">
      
      <div class="text-center align-items-center">
        @foreach ($sekolah as $sekolah)
        <img src="{{ asset('assets/img/sekolah/'.$sekolah->logo_sekolah) }}" class="img-fluid animated" alt="" style="width: 300px">
        @endforeach
         
          <h1></h1>
          <h5 class="text-white fw-bold mb-4">LOGIN</h5>
      </div>
     <div >
      <form action="{{ route('loginSiswa') }}" method="POST">
        @csrf
          <div class=" mb-3">
              <input type="text" class="form-control form-control-sm glasForm  @error('email') is-invalid @enderror" id="nopes"  placeholder="Nomer Peserta Ujian" name="nopes">
          </div>
          <div class=" mb-3">
              <input type="password" class="form-control form-control-sm glasForm  @error('password') is-invalid @enderror" id="password"  placeholder="passowrd" name="password">
          </div>
          <div class=" mb-3 d-grid ">
              <button type="submit" class="btn btn-grad btn-info shadow">Login</button>
          </div>

          
        </form>
     </div>
     <div class="p-2">
        @if(session()->has('status'))
        <div class="alert alert-success bg-gradient alert-dismissible fade show fw-bold shadow-lg" role="alert">
            <marquee direction="left">  <i class="fas fa-check-square me-2"></i> {{  session('status')}}</marquee>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger bg-gradient alert-dismissible fade show fw-bold shadow-lg" role="alert">
            <marquee direction="left">  <i class="fas fa-check-square me-2"></i> {{  session('loginError')}}</marquee>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
     </div>

     @error('email')
     <div class=" is-invalid">

         <div class="alert glass shadow alert-dismissible fade show text-danger" role="alert">
             <strong><i class="fab fa-teamspeak"></i> Hai Gaes</strong> {{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
     </div>
     @enderror
     @error('password')
     <div class=" is-invalid">

         <div class="alert glass shadow alert-dismissible fade show text-danger" role="alert">
             <strong><i class="fab fa-teamspeak"></i> Hai Gaes</strong> {{ $message }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
     </div>
     @enderror
  </div>
</div>


@endsection