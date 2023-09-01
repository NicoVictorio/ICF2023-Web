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
    </script>
    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        @import url('https://fonts.cdnfonts.com/css/montserrat');

        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        .navbar-collapse {
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-item {
            margin: 0px 10px;
        }

        .footer-left .header {
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        .img-border{
            background: white;
            width: 60px;
            height: 60px; 
            border-radius: 50%; 
            position: relative;
        }
        .img-border img{
            width: 40px;
            height: 40px; 
            object-fit: contain;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            aspect-ratio:1/1;
            border-radius: 20%;
        }
        .img-border-logo {
            background: white;
            width: 30px;
            height: 30px; 
            border-radius: 50%; 
            position: relative;
        }

        .img-border-logo img{
            width: 20px;
            height: 20px; 
            object-fit: contain;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            aspect-ratio:1/1;
            border-radius: 20%;
        }
    </style>
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-sm navbar-dark bg-danger" aria-label="Third navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ICF 2023</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse w-100" id="navbarsExample03">
                    <ul class="navbar-nav mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Map</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Treasure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Event</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}
        <main class="">
            @yield('content')
        </main>
        {{-- Footer --}}
        <div class="footer-container pt-5 bg-danger text-white">
            <footer class="footer-bs mt-3">
                <div class="row w-100 p-5">
                    <div class="col-md-5 footer-brand animated fadeInLeft">
                        <h2 style="">ICF 2023</h2>
                        <p>Sebuah festival yang memamerkan hasil-hasil karya mahasiswa dari Informatika Universitas Surabaya.</p>
                        <br>
                        <div class="brand-text mb-0 d-flex m-0">
                            <div class= "img-border">
                                <img src="{{ asset('assets') }}/img/logo-ubaya.png">
                            </div>
                            <div class= "img-border mx-2">
                                <img src="{{ asset('assets') }}/img/logo-icf.png">
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: white;">Contact Us</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                            <div class="brand-text mb-0 d-flex m-0">
                            <div class= "img-border-logo">
                                <img src="{{ asset('assets') }}/img/whatsapp.png">
                            </div>
                                <a style="color: white;">081216339241 (Gabriel)</a>
                            </li>
                            <li class="mb-1">
                                <a style="color: white;">087780452066(Aurel)</a>
                            </li>
                            <li class="mb-1">
                            <div class= "img-border-logo">
                                <img src="{{ asset('assets') }}/img/mail.png">
                            </div>
                                <a style="color: white;">icfubaya@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: white;">Follow Us</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1">
                                <a href ="https://www.instagram.com/icfubaya2023/" target ="_blank" style="color: white;">icfubaya2023</a>
                            </li>
                        </ul>
                    </div>

                    <p class="mt-2">
                        <span class="float-md-start d-block d-md-inline-block mt-25 ">Copyright © ICF 2023 Committee</span>
                    </p>
                </div>
            </footer>
        </div>
        {{-- End Footer --}}
    </div>
</body>

</html>