<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Keynote @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            {{ Html::style('css/style.css')}}
            @yield('gallerystyle')
            @yield('stylesheets')
    </head>
    <body>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loder.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!-- Header Start -->
            <div class="header-area">
                    <div class="main-header  header-sticky">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2 col-md-1">
                                    <div class="logo">
                                        <a href=""><img src="{{asset('frontend/assets/img/logo/keynote.png')}}" alt=""></a> 
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10">
                                    <div class="menu-main d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu f-right d-none d-lg-block">
                                            <nav> 
                                                <ul id="navigation">
                                                    <li><a href="{{url('/')}}">Home</a></li>
                                                    <li><a href="{{url('/about')}}">About</a></li>
                                                    <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                                    <li><a href="{{url('/blog')}}">Blog</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                            <a href="#" class="btn header-btn">Contact Me</a>
                                        </div>
                                    </div>
                                </div>   
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Header End -->
        </header>
    <main>
        
