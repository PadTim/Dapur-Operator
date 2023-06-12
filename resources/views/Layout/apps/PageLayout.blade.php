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
    <link rel="stylesheet" href="{{ asset('assets/plugins/adminLTE/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/trix/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui-costum/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-style.css') }}">

    <script src="{{ asset('assets/js/jquery-37.min.js') }}"></script>
    <script src="{{ asset('assets/js/cdn_select2.js') }}"></script>

    <!-- TriX CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
    
    <!-- X-Editable CSS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-editable/js/editable.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-editable/css/bootstrap-editable.css') }}">



    <title>{{ $title }}</title>
</head>

<body class="sidebar-mini layout-fixed ">
    <div class="wrapper ">

        <div class="preloader glass flex-column justify-content-center align-items-center bg-transparent">
            <img class="animation__shake" src="{{ asset('assets/img/logo/KopiHideung.png') }}" alt="KopiHideung" height="255"
                width="255">
        </div>
        @include('layout.apps.atas')
        @include('layout.apps.kiri')
        @include('layout.apps.konten')

        
        <footer class="main-footer glass list-bar text-sm">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2022 <a href="#">KopiHideung-Energy</a>.</strong> All rights reserved.
        </footer>

        <aside class="control-sidebar glass">

        </aside>

    </div>
  
    <script src="{{ asset('assets/js/KopiHideung.js') }}"></script>
    <script src="{{ asset('assets/js/matrix.js') }}"></script>
   
    <script type="text/javascript" src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/adminLTE/js/adminlte.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('assets/plugins/DataTables/js/datatables.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('assets/plugins/jquery-ui-costum/jquery-ui.min.js') }}"></script>

   
    <!-- X-Editable JavaScript -->
   


   

   
</body>

</html>
