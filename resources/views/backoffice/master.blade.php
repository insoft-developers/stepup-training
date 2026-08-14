<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>StepupTraining.id | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/su.ico') }}" type="image/png">

    <link href="{{ asset('template/admin') }}/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('template/admin') }}/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css">
    <script src="{{ asset('template/admin') }}/assets/js/config.js"></script>
    <style>
        .form-control::placeholder {
            color: #adb5bd;
            opacity: 1;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="{{ url('backoffice') }}" class="logo-light">
                    <img src="{{ asset('images/logo_black.png') }}" alt="logo" class="logo-lg" height="60">
                    <img src="{{ asset('images/step_icon.png') }}" alt="small logo" class="logo-sm" height="24">
                </a>

                <!-- Brand Logo Dark -->
                <a href="{{ url('backoffice') }}" class="logo-dark">
                    <img src="{{ asset('images/logo_black.png') }}" alt="logo" class="logo-lg" height="60">
                    <img src="{{ asset('images/step_icon.png') }}" alt="small logo" class="logo-sm" height="24">
                </a>
            </div>

            <!--- Menu -->
            @include('backoffice.sidebar')

        </div>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            @include('backoffice.top')
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                @yield('content')
                <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('backoffice.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->

    <script src="{{ asset('template/admin') }}/assets/js/vendor.min.js"></script>
    <script src="{{ asset('template/admin') }}/assets/js/app.js"></script>
    

    <!-- Jquery Sparkline Chart  -->
    <script src="{{ asset('template/admin') }}/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Jquery-knob Chart Js-->
    <script src="{{ asset('template/admin') }}/assets/libs/jquery-knob/jquery.knob.min.js"></script>


    <!-- Morris Chart Js-->
    <script src="{{ asset('template/admin') }}/assets/libs/morris.js/morris.min.js"></script>

    <script src="{{ asset('template/admin') }}/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="{{ asset('template/admin') }}/assets/js/pages/dashboard.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    @stack('scripts')

</body>

</html>
