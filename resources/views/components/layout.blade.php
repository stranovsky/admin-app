<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/auth/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/auth/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/auth/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/auth/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/auth/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/auth/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/auth/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="layout-wrapper">
        {{$slot}}

    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/auth/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/auth/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('assets/auth/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('assets/auth/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{ asset('assets/auth/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/auth/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('assets/auth/js/pages/dashboard-crm.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/auth/js/app.js')}}"></script>
</body>
</html>