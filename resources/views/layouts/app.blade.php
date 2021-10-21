<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    /*///////////// gallery CSS /////////////*/

    .-fx-image-gal {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin: 0 auto;
        width: 100%;
        max-width: 960px;
        justify-content: center;
    }

    .-fx-gal-item {
        width: 100%;
        margin: 0px;
        padding: 0px;
        overflow: hidden;
    }

    .-fx-gal-item a {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        background-color: white;
    }

    .-fx-gal-image-thumb img {
        width: 100%;
        cursor: pointer;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        filter: grayscale(100%);
        transform: scale(1.1);
        transition: all 0.5s ease;
    }

    .-fx-gal-image-thumb:hover img {
        cursor: pointer;
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        filter: grayscale(0%);
        transform: scale(1.5);
        transition: all 0.5s ease;
    }

    @media (min-width: 420px) {
        .-fx-image-gal {
            flex-direction: row;
            flex-wrap: wrap;
        }

        .-fx-gal-item {
            width: 50%;
        }
    }

    @media (min-width: 768px) {
        .-fx-gal-item {
            width: 33.33%;
        }
    }

    .dropdown-toggle::after {
        display: none;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    /* Font Awesome Icons have variable width. Added fixed width to fix that.*/
    .icon-width {
        width: 2rem;
    }

    .mug-redesign {
        color: #fff;
        background: linear-gradient(to right bottom, #1d3c45 35%, #d2601a 65%);
        font-size: 50px;
        line-height: 80px;
        height: 95px;
        width: 95px;
        margin: 0 auto 0px;
        border-radius: 10px;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.05) inset, 0 0 5px rgba(0, 0, 0, 0.1); */
        /* border: 10px solid #f9f9f9; */
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .setting01 {
        background: linear-gradient(to right bottom, #1d3c45 35%, #d2601a 65%);
    }

    .serviceBox {
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }

    .serviceBox .service-icon {
        color: #fff;
        background: linear-gradient(to right bottom, #1d3c45 35%, #d2601a 65%);
        font-size: 45px;
        line-height: 80px;
        height: 95px;
        width: 95px;
        margin: 0 auto 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05) inset, 0 0 5px rgba(0, 0, 0, 0.1);
        /* border: 10px solid #f9f9f9; */
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .serviceBox .title {
        color: #777;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin: 0 0 8px;
    }

    .serviceBox .description {
        color: #999;
        font-size: 14px;
        line-height: 22px;
        margin: 0 15px;
    }

    .serviceBox.green .service-icon {
        background: linear-gradient(to right bottom, #1d3c45 35%, #d2601a 65%);
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .serviceBox.blue .service-icon {
        background: linear-gradient(to right bottom, #1d3c45 35%, #d2601a 65%);
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .serviceBox.orange .service-icon {
        background: linear-gradient(to right bottom, #1d3c45 35%, #d2601a 65%);
        background-clip: text;
        -webkit-background-clip: text;
        text-fill-color: transparent;
        -webkit-text-fill-color: transparent;
    }

    @media only screen and (max-width: 990px) {
        .serviceBox {
            margin: 0 0 30px;
        }
    }

    img {
        height: auto;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
                    <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">

                            <a class="navbar-brand" href="/">
                                <img src="https://res.cloudinary.com/daiey6vt0/image/upload/v1634695090/Tabeisa/tabeisa_coffee_sharpened_and_blurred_USE_THIS_f2tib5.png" alt="" width="56" height="25">
                                <span class="ml-3 font-weight-bold">TABEISA</span>
                            </a>
                        </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse" id="navbar4">
                            <ul class="navbar-nav mr-auto pl-lg-4">
                                <li class="nav-item px-lg-2 active"> <a class="nav-link" href="#"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a> </li>
                                <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Services</a> </li>
                                <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-calendar"></i></span>Event</a> </li>

                                <li class="nav-item px-lg-2 dropdown d-menu">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i class="far fa-caret-square-down"></i></span>About
                                        <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                                        <a class="dropdown-item" href="#">Who we are</a>
                                        <a class="dropdown-item" href="#">Mission and vision</a>
                                    </div>
                                </li>

                                <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-robot"></i></span>Chatbot</a> </li>
                            </ul>
                            <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                                <li class="nav-item"> <a class="nav-link" href="#">
                                        <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                                    </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">
                                        <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                                    </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#">
                                        <i class="fab fa-whatsapp"></i><span class="d-lg-none ml-3">Whatsapp</span>
                                    </a> </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- Boostratp JS  -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->

    <script>
        $(document).ready(function() {
            if ($(window).width() > 991) {
                $('.navbar-light .d-menu').hover(function() {
                    $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                }, function() {
                    $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
                });
            }
        });
    </script>


    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-2">
                    <h5 class="text-uppercase">
                        <i class="fas fa-mug-hot mug-redesign col d-flex justify-content-center"></i>

                    </h5>

                    <p>
                    We are here for your break.

                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0 ">
                    <h5 class="text-uppercase">Tabeisa Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/" class="text-dark">About Us</a>
                        </li>
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/" class="text-dark">Contact Us</a>
                        </li>
                        <li>
                            <!-- <a href="#!" class="text-dark">T&Cs</a> -->
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow us</h5>
                    <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                            </a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
                            </a> </li>
                    </ul>

                </div>
            </div>
            <!-- <i class='fas fa-arrow-alt-circle-up float-right pointerscrollup' onclick="scrollToTop()" style='font-size:38px;color:#DADED4'></i> -->
        </div>
        <!-- <footer class="text-light text-center text-lg-start" style="background-color: #DADED4;"> -->

        <!-- Copyright -->
        <div class="text-light text-center p-3 " style="background-color: #1d3c45;">
            © 2021 Copyright:
            <a class="text-light">tabeisa.co.za</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>