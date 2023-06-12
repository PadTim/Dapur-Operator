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
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/neon-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/wilujeng-style.css') }}">

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
<body>
    @yield('isi-kontent')
</body>
</html>