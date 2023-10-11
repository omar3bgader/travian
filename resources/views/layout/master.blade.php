<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>@yield('title')</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="{{ asset('css/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

        <!-- Theme CSS - Includes Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Favicons -->
        <link href="{{ asset('images/favicon.png') }}" rel="icon">
        <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('css/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('css/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/simple-datatables/style.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.2.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>
    <body>
        @include('layout.navbar')
        @include('layout.sidebar')

        @yield('content')

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{ asset('js/creative.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>

        <!-- Vendor JS Files -->
        <script src="{{ asset('js/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('js/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('js/quill/quill.min.js') }}"></script>
        <script src="{{ asset('js/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('js/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
