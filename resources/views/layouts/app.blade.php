<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ICF 2023</title>

    <!-- Scripts -->
    {{-- JQuery --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <!-- Styles -->
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    // <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/hoomanbahreini/bootstrap-half-and-quarter-grid/fractional-grid.css">
    // <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/hoomanbahreini/bootstrap-half-and-quarter-grid/fractional-grid.min.css">
         
    </script>
    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.cdnfonts.com/css/montserrat');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background-color: #E83434;
        }

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            padding-left: 2%;
            margin: 0;
        }

        .navbar-collapse {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-item {
            margin: 0px 30px;
        }

        .nav-link {
            color: white;
        }

        .navbar-toggler {
            border: none;
        }

        .container-fluid img {
            height: 30px;
            margin-right: 2%;
            margin-left: 5%;
        }

        /* FOOTER */
        .footer-container {
            background-color: #E83434;
        }

        .img-border {
            background: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            position: relative;
        }

        .img-border img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            aspect-ratio: 1/1;
            border-radius: 20%;
        }

        .img-border-logo {
            background: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            position: relative;
        }

        .img-border-logo img {
            width: 20px;
            height: 20px;
            object-fit: contain;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            aspect-ratio: 1/1;
            border-radius: 20%;
        }

        .contact-us {
            transform: translateX(-20%);
        }

        @media(max-width:992px) {
            #maskot {
                display: none;
            }
        }

        @media screen and (max-width:768px) {
            .vr {
                display: none;
            }

            .contact-us {
                transform: translateX(0%) !important;
                padding: 0;
            }

            .follow-us {
                padding: 0;
            }

            .footer-container p {
                padding: 10% 0 0 0;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg" aria-label="Third navbar example">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-3" href="{{ route('home') }}">ICF 2023</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <img src="{{ asset('assets') }}/img/iconMaskot.png">
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarsExample03">
                    <ul class="navbar-nav mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('map') }}">Map</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('treasure') }}">Treasure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('event') }}">Event</a>
                        </li>
                    </ul>
                </div>
                <img id="maskot" src="{{ asset('assets') }}/img/iconMaskot.png">
            </div>
        </nav>
        {{-- End Navbar --}}

        <main class="">
            @yield('content')
        </main>

        {{-- Footer --}}
        <div class="footer-container text-white">
            <div class="row w-100 p-5 m-0">
                <div class="col-md-5 footer-left">
                    <h4><b>ICF 2023</b></h4>
                    <p>Sebuah festival yang memamerkan hasil-hasil karya
                        mahasiswa dari Informatika Universitas Surabaya.</p>
                    <br>
                    <div class="mb-0 d-flex m-0">
                        <div class="img-border">
                            <img src="{{ asset('assets') }}/img/logo-ubaya.png">
                        </div>
                        <div class="img-border mx-2">
                            <img src="{{ asset('assets') }}/img/logo-icf.png">
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-2">
                    <div class="d-flex justify-content-center" style="height: 90%;">
                        <div class="vr" style="width:0.1rem; opacity:100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 footer-right">
                    <div class="row">
                        <div class="contact-us col-6">
                            <h4 class="mb-3"><b>Contact Us</b></h4>
                            <div class="row">
                                <div class="col-2 p-0">
                                    <img class="w-100 p-md-0" src="{{ asset('assets') }}/img/whatsapp.png">
                                </div>
                                <div class="col-10">
                                    <a style="color: white;">081216339241 (Gabriel)</a>
                                    <a style="color: white;">087780452066 (Aurel)</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-2 p-0">
                                    <img class="w-100" src="{{ asset('assets') }}/img/email.png">
                                </div>
                                <div class="col-10">
                                    <a style="color: white;">icfubaya@gmail.com</a>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="follow-us col-6">
                            <h4 class="mb-3""><b>Follow Us</b></h4>
                            <div class=" row">
                                <div class="col-2 p-0">
                                    <img class="w-100" src="{{ asset('assets') }}/img/instagram.png">
                                </div>
                                <div class="col-10">
                                    <a href=" https://www.instagram.com/icfubaya2023/" target="_blank"
                                        style="color: white;">@icfubaya2023</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="m-0">Copyright © ICF 2023 Committee</p>
        </div>
    </div>
    {{-- End Footer --}}
    </div>
</body>

</html>