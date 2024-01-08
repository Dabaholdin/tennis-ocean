<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ @asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ @asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }} ">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ @asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ @asset('plugins/jqvmap/jqvmap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ @asset('dist/css/adminlte.min.css') }} ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ @asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ @asset('plugins/daterangepicker/daterangepicker.css') }} ">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ @asset('plugins/summernote/summernote-bs4.min.css') }} ">
    <link rel="stylesheet" href="{{ url('/assets/css/default.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">


    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ @asset('assets/img/logo/imgH.png') }}" alt="AdminLTELogo"
                height="200" width="200">
        </div>

        <!-- Navbar -->
        @include('includes.admin.header')
        <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ @asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Tennis-ocean</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if (auth()->user()->avatar)
                            <img src="{{ @asset('storage/' . auth()->user()->avatar) }}" class="img-circle elevation-2"
                                alt="User Image">
                        @else
                            <span class="bg-white img-circle p-1 fo justify-content-center">
                                {{ mb_substr(auth()->user()->firstname, 0, 1) }}{{ mb_substr(auth()->user()->lastname, 0, 1) }}
                            </span>
                        @endif
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->firstname }}
                            {{ auth()->user()->lastname }}</a>
                    </div>
                </div>

                

                @include('includes.admin.sidebar')

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->

        @include('includes.admin.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ @asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ @asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ @asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ @asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ @asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ @asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ @asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ @asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ @asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ @asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ @asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ @asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ @asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ @asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ @asset('dist/js/demo.js') }}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ @asset('dist/js/pages/dashboard.js') }}"></script> --}}
</body>

</html>
