@extends('layout.auth')
@section('form')

<div class="row  justify-content-center p-2">

    <div class="col col-md-10 glas text-center">
        <h1 class="tx-hijau fw-bold  mt-5 d-flex justify-content-center text-uppercase">Selamat Datang <br>
            {{ Auth::user()->name }}</h1>
        <h4 class="tx-tron  fw-bold  mt-5 d-flex justify-content-center ">Sebuah link untuk mengaktifkan atau memverifikasi akun Anda<br>
             telah dikirimkan lewat email yang Anda daftarkan </h4>

        <h3 class="tx-merah">" {{ Auth::user()->email }} "</h3>
        <h4 class="tx-tron  fw-bold  mt-5 d-flex justify-content-center "> Silahkan cek Kotak masuk pada email
            tersebut. <br> Jika tidak ada, coba cek di folder spam.</h4>
        <h5 class="tx-hijau fw-bold  mt-5 d-flex justify-content-center">Jika belum menerima Email, klik tombol di
            bawah ini untuk meminta ulang link verifikasi</h5>
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
           <div class=" mb-3 d-grid ">
             <button type="submit" class="btn btn-grad btn-info shadow">Kirim Ulang Email</button>
           </div>
        </form>
        <h5 class="tx-ungu fw-bold  mt-5 d-flex justify-content-center">Salam Satu Data, <br>
            avexKD@KopiHideung.enegy</h5>
    </div>

</div>


@endsection
