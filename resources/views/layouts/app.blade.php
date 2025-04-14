<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart Hair Beauty</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1SDgH6ZSPTlggy1yI6+Dbkiz8xzpHJEVAlF/AM1tHPLsf5STom9rwtjE4hKAF20FfXXNTFqEYXyJNWh1GiZedQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-5.14.0.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-4.5.3.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div><!-- main header -->
        <header class="main-header header-one menu-absolute">
            <div class="container">
                @include('layouts.top-header')
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                @include('layouts.header')
            </div>

            <!--End Header Upper-->
        </header>

        @yield('style')
        @yield('content')
        @yield('script')

        <!-- Footer Start -->
        <footer class="main-footer bg-black bgs-cover text-white pb-30"
            style="background-image: url(assets/images/background/footer.png);">
            @include('layouts.footer')
        </footer>
        <!-- Footer End -->
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
    <!-- Jquery -->
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Appear Js -->
    <script src="{{asset('assets/js/appear.min.js')}}"></script>
    <!-- Slick -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select -->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('assets/js/script.js')}}"></script>


</body>

</html>