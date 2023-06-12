<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/404.css') }}">
  
    <title>HACKD</title>
</head>

<body>
    <canvas id="Matrix"></canvas>
    <div class="containerbox">
        <div class="box">
            <div class="icon-404 text-center">
                <img src="{{ asset('assets/img/bg-themes/404-icon.png') }}" alt="" style="width: 450px">

            </div>
            <h3 class="text-center">HALAMAN TIDAK DI TEMUKAN </h3>
                <h3 class="text-end">jangan PANIK, Jangan Lupa KopiHideung-Energy <h3>
                 
          

            <div class="kopi-hideung text-end">
                <div class="gambar">
                    <img src="  {{ asset('assets/img/logo/KopiHideung.png') }}" alt="" style="width: 150px">
                </div>
                   
                  <button class="btn btn-lg bg-gradient bg-danger text-end" onclick="goBack()" >KEMBALI</button>
              </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/js/404.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</html>