<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARAMMAT | V1</title>
    <link rel = "icon" href="{{asset('favicon_io/favicon.ico')}}" type = "image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
   <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset("plugins/summernote/summernote-bs4.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

{{--    cutome css--}}
    <link rel="stylesheet" href="{{asset("css/customcss.css")}}" />

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("plugins/select2/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset("plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset("plugins/toastr/toastr.min.css")}}">

    @yield('customCss')
</head>