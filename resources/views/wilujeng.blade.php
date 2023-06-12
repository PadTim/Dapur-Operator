@extends('Layout.siswa.PageLayout-siswa')
@section('isi-kontent')

<style>
   #wilujeng {
    height: 100vh; /* Mengatur tinggi section sesuai tinggi viewport */
    display: flex;
    justify-content: center;
    align-items: center;
}
    .bg-erkas {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .bg-erkas img {
        width: 100%;
        height: 100vh;
        background-position: center;
        background-size: cover;
    }

    .content {
        /* display: flexbox; */
        position: relative;
        z-index: 1;
    }

    .container,
    .row {
        height: 100%;
        min-height: 100%;
    }

    html,
    body {
        height: 100%;
    }

    .ngereng-yuk {
        margin: 0;
        padding: 0;
        top: 0;
        font-family: 'Pokemon Solid';
        font-size: 27pt;
        color: #fff;
        text-shadow: #fc0 1px 0 10px;

    }
    .logo-ngereng {
    animation: naikTurun 2s infinite;
}

@keyframes naikTurun {
   0% {
      transform: translateY(0);
   }
   50% {
      transform: translateY(-20px);
   }
   100% {
      transform: translateY(0);
   }
}
</style>
<div class="container-fluid">
    <div class="bg-erkas">
        <img  src="{{ asset('assets/img/bg-themes/erkas.jpg') }}" alt="">
    </div>
</div>

<section id="wilujeng">
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="glass rounded-4 px-3 pt-0 pb-1">
                    <div class="text-center align-items-center mb-0 pb-0">
                        <img src="{{ asset('assets/img/logo/ikkos-glow.png') }}" class="img-fluid logo-ngereng naikTurun" alt=""
                            style="width: 150px">
                    </div>
                    <div class="ngereng-yuk text-center">
                        <h1>NeReng Yuk</h1>
                    </div>
                    <form class=" text-center" action="{{ route('update.aksi') }}" method="POST">
                        @csrf
                        @foreach ($tahun as $tahun)
                        <button type="submit" name="selected_tahun" value="{{ $tahun->id }}" class="btn btn-bloc btn-lg bg-transparent glass hoverPutih text-white font-weight-bold m-2">{{ $tahun->nama_tahun }}</button>
                        @endforeach
                    </form>
                     
                    
                </div>

            </div>
        </div>

    </div>
</section>
@endsection