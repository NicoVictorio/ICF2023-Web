@extends('layouts.app')
@section('content')
<style>
    p {
        font-size: 36px;
    }

    h1 {
        font-size: 48px;
    }

    h6 {
        font-size: 24px;
    }

    .container-event {
        background-image: url("{{ asset('assets') }}/img/bg-event.png");
        min-height: 600vh;
        width: 100%;
        background-size: cover;
        position: relative;
    }

    .container-event .seminar .seminar-cards {
        position: relative;
        min-height: 10px;
        background: transparent;
        border: 2px solid white;
        border-radius: 30px;
        backdrop-filter: blur(40px);
    }

    .container-event .competition .competition-cards {
        position: relative;
        min-height: 10px;
        background: transparent;
        border: 2px solid white;
        border-radius: 30px;
        backdrop-filter: blur(40px);
    }

    .free{
        border: 3px solid white;
        border-radius: 30px;
        padding: 5px;
        margin: 0px 15px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        height: 60px;
        width: 150px;
    }

    .certificate{
        border: 3px solid white;
        border-radius: 30px;
        padding: 5px;
        margin: 0px 15px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        height: 60px;
        width: 250px;
    }

    .rewards{
        border: 3px solid white;
        border-radius: 30px;
        padding: 5px;
        margin: 0px 15px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        height: 60px;
        width: 200px;
    }

    .registration .btn-regist{
        border-radius: 30px;
        display: flex;
        padding: 5px;
        width: 300px;
        height: 60px;
    }

    .mechanism .btn-mechanism{
        border-radius: 30px;
        display: flex;
        padding: 5px;
        width: 300px;
        height: 60px;
    }

    .container-event .seminar .seminar-cards .label img {
        position: relative;
        height: 30px;
    }

    .container-event .competition .competition-cards .label img {
        position: relative;
        height: 30px;
    }

    #btn-regist {
        padding-top: 0px !important;
    }

    .spacer{
        height: 200px;
    }

    @media screen and (max-width:768px) {
        .row{
            padding: 24px !important;
        }

        .label .row{
            padding: 0px !important;
        }

        .free{
            height: 30px;
            width: 85px;
            margin: 0px 10px 10px 0px;
        }

        .certificate{
            height: 30px;
            margin: 0px 10px 10px 0px;
            width: 140px;
        }

        .rewards{
            height: 30px;
            width: 120px;
        }

        p {
            font-size: 16px;
        }

        h1 {
            font-size: 24px;
        }

        h6 {
            font-size: 12px;
        }

        .container-event .seminar .seminar-cards .label img {
            height: 15px;
        }

        .container-event .seminar .seminar-cards {
            height: 620px;
        }

        .container-event .competition .competition-cards .label img {
            height: 15px;
        }

        .container-event .competition .competition-cards {
            height: 620px;
        }

        .spacer{
            height: 100px;
        }
    }
</style>
<div class="container-event">
    <div class="row w-100 p-5 m-0">
        <div class="seminar m-0 p-0">
            <div class="judul d-flex justify-content-center">
                <h1 class="text-white m-0 p-0"><b>SEMINARS</b></h1>
            </div>
            <br><br>

            <div class="seminar-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>ChatGPT Allies or Enemies</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>03 November 2023 || Vincentius Riandaru Prasetyo, M.Cs.</p>
                        <p>Seminar ini bertujuan untuk mengedukasi peserta untuk mengetahui bertapa berdampaknya ChatGPT pada dunia kita saat ini. Efek samping yang diberikan baik itu dalam sisi positif ataupun negatifnya. Sehingga manfaatnya adalah orang bisa mengidentifikasi cara menggunakan ChatGPT yang baik.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-md-2 registration m-0 p-0">
                        <button class="border border-white text-grey btn-regist fs-3 d-flex justify-content-center align-items-center"><b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="seminar-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>How to be Main Character</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>03 November 2023 || Shannia Olivia</p>
                        <p>Workshop ini akan membahas tentang cara pembuatan karakter desain dari awal hingga pembuatan asset-assetnya. Mulai dari pembuatan base character, cara menambahkan asset mulai dari pakaian, rambut, hingga tambahan aksesoris lainnya. Selain itu juga, akan ada pembahasan tentang hubungan antara color picking dan character personality.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-md-2 registration m-0 p-0">
                        <button class="border border-white text-grey btn-regist fs-3 d-flex justify-content-center align-items-center"><b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="seminar-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>UI/UX in Digital Product</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>04 November 2023 || Lisana, Ph.D.</p>
                        <p>Seminar ini bertujuan untuk memberikan pengalaman kepada peserta untuk mengetahui dasar dari UI dan UX disekitar mereka. Bagaimana pentingnya dalam UI/UX dalam suatu produk digital. Manfaat (serta cara untuk memperolehnya) apa saja yang bisa didapatkan ketika kita memperhatikan UI UX di suatu produk.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-md-2 registration m-0 p-0">
                        <button class="border border-white text-grey btn-regist fs-3 d-flex justify-content-center align-items-center"><b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="seminar-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Navigating the Data Jungle</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>04 November 2023 || Ahmad Hilmy</p>
                        <p>Seminar ini akan membahas tentang pengenalan mengenai Data Analysis dan juga AI. Kemudian Software dan alat yang umum digunakan dalam Data Analysis, dan juga kelebihan dan kekurangannya, dan juga bagaimana AI dalam masa depan di dunia bisnis digital yang dibawakan oleh pakar professional dan ahli dalam bidang ini.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-md-2 registration m-0 p-0">
                        <button class="border border-white text-grey btn-regist fs-3 d-flex justify-content-center align-items-center"><b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>

            <div class="seminar-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Behind the Production Gamecom</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>05 November 2023 || Josevina Gaby</p>
                        <p>Talkshow ini akan membahas pengetahuan seputar studio game kepada masyarakat umum dengan narasumber dari pihak studio game terkenal di Indonesia yaitu Gamecom Team. Topik yang dibahas sangat bervariasi, mulai dari awal produksi game hingga proses rilis sebuah game ke platform-platform tertentu dari pengalaman Gamecom Team studio.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-md-2 registration m-0 p-0">
                        <button class="border border-white text-grey btn-regist fs-3 d-flex justify-content-center align-items-center"><b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>
        </div>

        <div class="spacer"></div>

        <div class="competition m-0 p-0">
            <div class="judul d-flex justify-content-center">
                <h1 class="text-white m-0 p-0"><b>COMPETITIONS</b></h1>
            </div>
            <br><br>

            <div class="competition-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>  
                            <div class="col-md-2 rewards">
                                <img src="{{ asset('assets') }}/img/rewards.png">
                                <h6 class="m-0" style="color: white;">Rewards</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Asset Game: Main Character Design</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>03 November 2023</p>
                        <p>Kompetisi "Asset Game: Main Character Design" adalah lomba ICF 2023 untuk membuat sebuah asset game orisinil berupa karakter utama. Selain karakter utama, terdapat beberapa alat dukung karakter yang digambar atau asset seperti pedang, sihir, dan lain-lain.  Untuk informasi lebih lanjut terdapat di mechanisms.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-6 registration m-0 p-0 mr-5">
                        <button class="border border-white text-grey btn-regist fs-3 d-inline-block justify-content-center align-items-center me-3"><b>Registration</b></button>
                        <button class="border border-white text-grey btn-regist fs-3 d-inline-block justify-content-center align-items-center"><b>Mechanisms</b></button>
                    </div>
                </div>      
            </div>
            <br><br>

            <div class="competition-cards">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>  
                            <div class="col-md-2 rewards">
                                <img src="{{ asset('assets') }}/img/rewards.png">
                                <h6 class="m-0" style="color: white;">Rewards</h6>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Mobile Legends: Bang Bang</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>05 November 2023</p>
                        <p>Mobile Legends: Bang Bang adalah ajang kompetisi e-sport bagi para pemain game mobile. Dalam kompetisi ini, pemain akan bersaing dalam tim untuk bersaing strategi, keterampilan, dan keahlian mereka dalam pertempuran tim 5 vs 5 yang intens. Untuk informasi lebih lanjut terdapat di mechanisms.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-6 registration m-0 p-0 mr-5">
                        <button class="border border-white text-grey btn-regist fs-3 d-inline-block justify-content-center align-items-center me-3"><b>Registration</b></button>
                        <button class="border border-white text-grey btn-regist fs-3 d-inline-block justify-content-center align-items-center"><b>Mechanisms</b></button>
                    </div>
                </div>      
            </div>
        </div>
        
        <div class="spacer"></div>
    </div>
</div>
@endsection