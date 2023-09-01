<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ICF 2023</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

        #btnSubmit{
            border : 1px solid black;
            border-radius:30%;
            background-color:white;
            padding : 5px 10px;
            color:black;
            cursor : pointer;
        }

        #btnSubmit:hover{
            background-color: red;
            color : white;
        }

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
        <main class="container">
            <div class ="bg-primary text-white text-center">
                <br/>
                <p><label>Nama: </label><input type="text" name = "namaPengunjung" id ="pengunjung">
                <input type="submit" value="Submit" id="btnSubmit" name="submit" onclick="simpan()"></p>
            </div>

                <script type="text/javascript">
                const simpan =() => {
                let nama = $('#pengunjung').val();
                let idPos = "<?php $id_Pos = $_GET["idPos"]; echo $id_Pos;?>";

                $.ajax({
                    type:"POST",
                    url:"{{route('simpan.data')}}",
                    data:{
                        "_token" : "<?php echo csrf_token();?>",
                        "name" : nama,
                        "Pos_id" : idPos,
                    },

                    success: function(data)
                    {
                        alert("Terimakasih karena telah mengunjungi pos" + idPos + "Silahkan tukarkan ini kepada panitia.")
                    }
                    })
                }
                </script>
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


