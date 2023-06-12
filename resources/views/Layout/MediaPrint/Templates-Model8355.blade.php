<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="media informasi dan komunikasi - dapur operator">
    <meta name="keywords" content="avexKD farid filantropia ikkos pademangan dapur operator sdn pademangan timur">
    <meta name="author" content="avexKD">
    <meta name="language" content="id">

    <link rel="stylesheet" href="{{ asset('assets/css/KopiHideung.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/model-8355.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/plugins/adminLTE/css/adminlte.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <script src="{{ asset('assets/js/jquery-37.min.js') }}"></script>
    



    <title>{{ $title }}</title>
</head>

<body>
    <header class="sticky-top mt-0 mb-2">
        <nav class="navbar navbar-expand-lg navbar-dark shadow">
            <div class="container ps-2 pe-2">
                <a class="navbar-brand hoverTextPutih" href="#" style="font-family: 'THE_JACATRA'; font-size:2em;">IKKOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse justify-content-end collapse text-start " id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item me-4">
                            <a class="nav-link active " href="#">
                                <button class="btn btnPutih-opacity hoverPutih text-white" onclick="window.print()"><i class="fas fa-print me-2"></i> CETAK</button>
                            </a>
                        </li>
                        
                        <li class="nav-item ms-4 me-4">
                            <a class="nav-link">
                                <div class="-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="darkSwitch">
                                    <label class="form-check-label" for="darkModeSwitch">Dark Mode</label>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
  
    @yield('media-print')
    



    <script src="{{ asset('assets/js/KopiHideung.js') }}"></script>
  
   
    {{-- <script type="text/javascript" src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('assets/plugins/adminLTE/js/adminlte.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
</body>
<style>
    .bg-cover{
        /* background:url('assets/img/bg-themes/222.jpg'); */
        background-image:url('assets/img/bg-themes/cover-blank1.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: initial;
    }
    .cover {
    height: 100vh; /* Mengatur tinggi section sesuai tinggi viewport */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center
}
.judul H1 {
    font-size: 3.5em;
    font-weight: 900;
    font-family: "Bookman Old Style";
    color: #ff0000;
    border: 2px solid #ff0000;
    border-radius: 15px;
    padding: 3px 9px 3px 9px;
    margin: 0;
    text-shadow: rgb(180, 180, 180) 1px 0 10px;
    box-shadow: rgb(180, 180, 180) 1px 0 10px;
}


.judul p{
    font-size: 18pt;
    font-weight: 700;
    color: #660000;
    text-shadow: rgb(180, 180, 180) 1px 0 10px;
}
.footer-cover h1{
    font-size: 3em;
    font-weight: 900;
    font-family: "Bookman Old Style";
    font-weight: 800;
    color: #ff0000;
    text-align: center;
    margin-bottom: 0;
    text-shadow: rgb(180, 180, 180) 1px 0 10px;
}
.footer-cover p{
    margin-top;0;
    font-size: 15pt;
    font-family: "Bookman Old Style";
    font-weight: 500;
    color: #660000;
    text-align: center;
}
</style>
</html>
