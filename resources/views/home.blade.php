@extends('layouts.app')
@section('content')
<style>
    .fix-image {
        max-width: 100%;
        max-height: 100%;
        display: block;
        transition: all 0.2s ease;
    }

    .fix-image:hover {
        -webkit-transform: scale(1.05);
    }

    .spacer {
        height: 50px;
        width: auto;
    }

    .spacer-1 {
        height: 50px;
        width: auto;
    }

    .competition .card {
        border-radius: 10px;
        background-color: #5CABDF;
    }

    .seminar-cards .card-left {
        border-radius: 15px;
        border: 2px solid #E83434;
    }

    .seminar-cards .card-right {
        border-radius: 15px;
        border: 2px solid #E83434;
    }

    .seminar-cards .details {
        padding: 3%;
    }

    .seminar-cards .foto {
        border-radius: 10px;
        max-width: 250px;
        padding: 2rem;
        position: relative;
        background: linear-gradient(to bottom right, white, #E83434);
    }

    @media (max-width: 768px) {
        .spacer {
            height: 100px;
        }

        .spacer-1 {
            height: 70px;
            width: auto;
        }

        .container-1 {
            padding: 0px !important;
            margin: 0px !important;
        }

        .timeline {
            max-height: 350px !important;
        }

        .maskot {
            max-height: 300px !important;
        }

        .prize {
            max-height: 230px !important;
        }

        .headline {
            max-height: 200px !important;
        }

        .introduction {
            margin: 0 !important;
            padding: 0 !important;
        }

        .introduction .description {
            width: 100vw;
            margin: 0 !important;
            padding: 0 !important;
        }
    }
</style>

<div class="container p-0">
    {{-- Introductions --}}
    <div class="row my-5 introduction">
        <div class="col-6 d-flex flex-wrap mt-5 description">
            <h1 class="mt-5 mx-5 judul" style="font-weight: bold">INFORMATICS <font color="#E83434">CREATIVE</font>
                <font color="#5CABDF">FESTIVAL 2023</font>
            </h1>
            <br>
            <h3 class="mx-5">Festival yang seru diadakan oleh Jurusan Informatika Fakultas Teknik Universitas Surabaya.
            </h3>
            <br>
            <h3 class="mx-5">Di sini kamu bisa melihat <font color="#E83434">karya-karya</font> keren mahasiswa, <font
                    color="#E83434">seminar</font> menarik,
                dan <font color="#E83434">sharing</font> seru dari komunitas, serta <font color="#E83434">lomba-lomba
                </font> yang tidak kalah
                serunya. Apalagi semua kegiatan di festival ini <font color="#E83434">GRATIS</font> lho!</h3>
        </div>
        <div class="col-6 d-flex flex-wrap justify-content-end maskot1">
            <img class="fix-image headline" src="{{ asset('assets') }}/img/maskot1.png" style="max-height: 600px;">
        </div>
    </div>
    {{-- End of Introductions --}}

    <div class="spacer"></div>

    {{-- Competitions --}}
    <div class="container-1 row my-5 competition">
        <div class="col-lg-12 d-flex flex-wrap justify-content-end p-0">
            <h1><b>COMPETITIONS</b></h1>
        </div>
        <div class="col-lg-5 col-sm-12 p-0 d-flex flex-wrap justify-content-start">
            <img class="fix-image prize" src="{{ asset('assets') }}/img/maskot2.png" style="max-height: 800px;">
        </div>
        <div class="col-lg-7 col-sm-12 p-0 d-flex flex-wrap justify-content-start">
            <div class="row py-5 m-0 game w-100" style="height: 50%;">
                <div class="col-5 card p-0">
                    <div class="gambar m-5">
                        <img src="{{ asset('assets') }}/img/iconMaskot.png" style="width:100%; height:100%;">
                    </div>
                    <div class="nama mx-4 mb-2 text-white d-flex justify-content-center">
                        <p class="fs-4 text-center"><b>Asset Game: Main Character Design</b></p>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5 card p-0">
                    <div class="gambar m-5">
                        <img src="{{ asset('assets') }}/img/iconMaskot.png" style="width:100%; height:100%;">
                    </div>
                    <div class="nama mx-4 mb-2 text-white d-flex justify-content-center">
                        <p class="fs-4 text-center"><b>Mobile Legends: Bang Bang</b></p>
                    </div>
                </div>
            </div>
            <div class="row m-0 cpd w-100" style="height: 40%">
                <div class="col-11 card p-0">
                    <div class="row m-0">
                        <div class="col-3 m-0"></div>
                        <div class="col-6 d-flex justify-content-center">
                            <div class="gambar m-5">
                                <img src="{{ asset('assets') }}/img/iconMaskot.png" style="width:100%; height:100%;">
                            </div>
                        </div>
                        <div class="col-3 p-0"></div>
                    </div>
                    <div class="nama mx-4 mb-2 text-white d-flex justify-content-center">
                        <p class="fs-4"><b>Creative Programming and Design</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Of Competitions --}}

    <div class="spacer-1"></div>

    {{-- Seminars --}}
    <div class="row w-100 m-0 seminar">
        <div class="col-12 p-0">
            <h2 class="m-0"><b>SEMINARS</b></h2>
        </div>
        <div class="col-12 p-0 mb-0 mt-4 seminar-cards">
            <div class="row m-0">
                <div class="col-lg-5 card-left p-0">
                    <div class="row m-0 h-100">
                        <div class="col-6 details p-0" style="position: relative;">
                            <div class="details ps-4 pt-4">
                                <h4><b>ChatGPT Allies or Enemies</b></h4>
                                <h5><b>Speaker:</b></h5>
                                <h5><b>
                                        <font color="#E83434">Vincentius Riandaru Prasetyo, M.Cs.</font>
                                    </b></h5>
                                <h6>
                                    <font color="#E83434">Lecture UBAYA</font>
                                </h6>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0"
                                style="width:80%; height:auto; position: absolute; left:0; bottom:0;">
                        </div>
                        {{-- <div class="col-1"></div> --}}
                        <div class="col-6 p-3">
                            <div class="border foto p-3">
                                <img src="{{ asset('assets') }}/img/vincent.jpg" style="width:100%; height:100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 card-left p-0">
                    <div class="row m-0 h-100">
                        <div class="col-6 details p-0" style="position: relative;">
                            <div class="details ps-4 pt-4">
                                <h4><b>How to be Main Character</b></h4>
                                <h5><b>Speaker:</b></h5>
                                <h5><b>
                                        <font color="#E83434">Shannia Olivia</font>
                                    </b></h5>
                                <h6>
                                    <font color="#E83434">Illustrator at Gamecom Team</font>
                                </h6>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0"
                                style="width:80%; height:auto; position: absolute; left:0; bottom:0;">
                        </div>
                        {{-- <div class="col-1"></div> --}}
                        <div class="col-6 p-3">
                            <div class="border foto p-3">
                                <img src="{{ asset('assets') }}/img/shania.jpg" style="width:100%; height:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row m-0">
                <div class="col-lg-5 card-left p-0">
                    <div class="row m-0 h-100">
                        <div class="col-6 details p-0" style="position: relative;">
                            <div class="details ps-4 pt-4">
                                <h4><b>UI/UX in Digital Product</b></h4>
                                <h5><b>Speaker:</b></h5>
                                <h5><b>
                                        <font color="#E83434">Lisana, Ph.D.</font>
                                    </b></h5>
                                <h6>
                                    <font color="#E83434">Lecture UBAYA</font>
                                </h6>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0"
                                style="width:80%; height:auto; position: absolute; left:0; bottom:0;">
                        </div>
                        {{-- <div class="col-1"></div> --}}
                        <div class="col-6 p-3">
                            <div class="border foto p-3">
                                <img src="{{ asset('assets') }}/img/lisana.jpg" style="width:100%; height:100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-lg-5 card-left p-0">
                    <div class="row m-0 h-100">
                        <div class="col-6 details p-0" style="position: relative;">
                            <div class="details ps-4 pt-4">
                                <h4><b>Navigating the Data Jungle</b></h4>
                                <h5><b>Speaker:</b></h5>
                                <h5><b>
                                        <font color="#E83434">Ahmad Hilmy</font>
                                    </b></h5>
                                <h6>
                                    <font color="#E83434">Business Research Consultant at Patria & Co</font>
                                </h6>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0"
                                style="width:80%; height:auto; position: absolute; left:0; bottom:0;">
                        </div>
                        {{-- <div class="col-1"></div> --}}
                        <div class="col-6 p-3">
                            <div class="border foto p-3">
                                <img src="{{ asset('assets') }}/img/ahmad.jpg" style="width:100%; height:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row m-0">
                <div class="col-lg-5 card-left p-0">
                    <div class="row m-0 h-100">
                        <div class="col-6 details p-0" style="position: relative;">
                            <div class="details ps-4 pt-4">
                                <h4><b>Behind the Production of Gamecom Team</b></h4>
                                <h5><b>Speaker:</b></h5>
                                <h5><b>
                                        <font color="#E83434">Josevina Gab</font>
                                    </b></h5>
                                <h6>
                                    <font color="#E83434">Community Manager at Gamecom Team</font>
                                </h6>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0"
                                style="width:80%; height:auto; position: absolute; left:0; bottom:0;">
                        </div>
                        {{-- <div class="col-1"></div> --}}
                        <div class="col-6 p-3">
                            <div class="border foto p-3">
                                <img src="{{ asset('assets') }}/img/josevina.jpg" style="width:100%; height:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Of Seminars --}}

    <div class="spacer"></div>
    <div class="spacer"></div>

    {{-- Others --}}
    <div class="container-others" style="width:100%; height:auto;">
        <div class="row m-0 p-0">
            <div class="col-xl-2 p-0">
                <img src="{{ asset('assets') }}/img/bubble2.png">
            </div>
            <div class="col-xl-8 p-0" style="text-align: center;">
                <div class="col-lg-12 judul">
                    <h1 class="m-0 p-0" style="display: flex; flex:wrap; justify-content:center;"><b>OTHERS</b></h1>
                    <br>
                    <br>
                </div>
                <div class="col-xl-12 content">
                    <h2>Dalam acara ini, kamu akan menemukan beragam hiburan seru yang tak bisa dilewatkan! <b>
                            <font color="#E83434">Mini games</font>
                        </b> menghibur,
                        <b>
                            <font color="#E83434">board game</font>
                        </b> mengasyikkan, dan jangan lewatkan kesempatan memenangkan <b>
                            <font color="#E83434">doorprize</font>
                        </b> menarik dari kedua game ini.
                        Ayo bergabung dan ramaikan acara tak terlupakan ini!
                    </h2>
                </div>
            </div>
            <div class="col-xl-2 p-0">
                <img src="{{ asset('assets') }}/img/bubble.png">
            </div>
        </div>
    </div>
    {{-- End of Others --}}

    <div class="spacer"></div>
    <div class="spacer"></div>

    {{-- Timeline --}}
    <div class="container-timeline">
        <div class="row m-0 p-0">
            <div class="col-12 text-center">
                <h1><b>TIMELINE</b></h1>
            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
    {{-- End of Timeline --}}
</div>
@endsection