<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery.lineProgressbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


        <title>Kelly Enterprise</title>      
    </head>
    <body>
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h1 class="text-center text-lg-left"><a class="brand-name" href="#"> Kelly Enterprise</a></h1>
                    </div>
                    <div class="col-12 col-lg-7 w-lg-100 d-lg-flex align-items-lg-center">
                        @include('includes.search')                      
                    </div>
                </div>
            </div>
            <section class="nav-row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-lg-flex justify-content-lg-end">
                            @include('includes.navbar')
                            
                        </div>
                    </div>
                </div>
            </section>
        </header>


        <div class="container">
            @include('includes.messages')
            @yield('content')
        </div>
        <script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-ui.min.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/material-scrolltop.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.waypoints.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.lineProgressbar.js')}}"></script>
    <script src="{{asset('assets/js/plugins/aos.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.instagramFeed.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ajax-mail.js')}}"></script>


    
        <!-- For Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
                crossorigin="anonymous"></script>
    </body>
</html>
