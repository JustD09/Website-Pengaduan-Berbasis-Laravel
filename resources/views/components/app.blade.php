<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') WEB Pengaduan Infrastruktur Jalan</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    {{-- END CSS --}}

    {{-- PLUGINS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    {{-- END PLUGINS --}}

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    {{-- END STYLE --}}

    {{-- FAVICON --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.jpg')}}" />
    {{-- END FAVICON --}}
</head>

<body>

    @include('components.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('components.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('components.footer')
        </div>
    </div>



    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/misc.js')}}"></script>
    <script src="{{ asset('assets/js/settings.js')}}"></script>
    <script src="{{ asset('assets/js/todolist.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>

</html>