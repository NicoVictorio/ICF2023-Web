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

    .spacer-2 {
        height: 0px;
        width: 5%;
    }

    .container-bubble img {
        height: 60%;
        transform: scale(0.8, 0.8);
    }

    .container-bubble2 img {
        height: 60%;
        transform: scale(0.8, 0.8);
    }

    .competition .card {
        border-radius: 10px;
        background-color: #5CABDF;
    }

    .seminar-cards .card-left {
        border-radius: 15px;
        border: 2px solid #E83434;
        width: 47.5%;
    }

    .seminar-cards .card-center {
        border-radius: 15px;
        border: 2px solid #E83434;
        width: 47.5%;
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

    .timeline-card {
        background-color: #5CABDF;
        color: #223883;
        height: auto;
        border-radius: 30px;
        padding: 15px;
        margin: 10px;
        width: 31%;
    }

    .background-location{
        background-color: #E83434;
        border-radius: 3%;
    }

    @media (max-width: 768px) {
        .spacer {
            height: 100px;
        }

        .spacer-1 {
            height: 70px;
            width: auto;
        }

        .spacer-2 {
            height: 70px;
            width: 100%;
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
            <h1 style="margin-right: 5%;"><b>COMPETITIONS</b></h1>
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
            <div class="row m-0 justify-content-center">
                <div class="col-lg-6 card-left p-0">
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
                <div class="col-1 spacer-2"></div>
                <div class="col-lg-6 card-left p-0">
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

            <div class="spacer-1"></div>

            <div class="row m-0 justify-content-center">
                <div class="col-lg-6 card-left p-0">
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
                <div class="col-1 spacer-2"></div>
                <div class="col-lg-6 card-left p-0">
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

            <div class="spacer-1"></div>

            <div class="row m-0 justify-content-center">
                <div class="col-lg-5 card-center p-0">
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
    <div class="container-others" style="width:100%;">
        <div class="row m-0 p-0">
            <div class="col-xl-10 p-0">
                <div class="row m-0 p-0" style="height: 80px;">
                    <div class="col-xl-2 p-0"></div>
                    <div class="col-xl-10 p-0 text-center">
                        <h1 class="m-0 p-0"><b>OTHERS</b></h1>
                    </div>
                </div>

                <div class="row m-0 p-0">
                    <div class="col-xl-2 p-0 container-bubble2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets') }}/img/bubble2.png">
                    </div>
                    <div class="col-xl-10 p-0 text-center">
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
            </div>
            <div class="col-xl-2 p-0 container-bubble text-center">
                <img src="{{ asset('assets') }}/img/bubble.png">
            </div>
        </div>
    </div>
    {{-- End of Others --}}

    {{-- Timeline --}}
    <div class="container-timeline">
        <div class="row m-0 p-0">
            <div class="col-12 text-center">
                <h1><b>TIMELINE</b></h1>
            </div>
            <div class="row m-0 p-0 d-flex justify-content-center">
                <div class="col-lg-4 timeline-card text-center">
                    <h1><b>DAY 1</b></h1>
                    <h3>03 November 2023</h3>
                    <div style="margin: 10%;">
                        <ul>
                            <li>
                                <h4><b>14.00-14.50</b></h4>
                            </li>
                            <h5>Chat GPT allies or enemies</h5>
                            <li>
                                <h4><b>5.00-16.00</b></h4>
                            </li>
                            <h5>How to be Main Character</h5>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 timeline-card text-center">
                    <h1><b>DAY 2</b></h1>
                    <h4>04 November 2023</h4>
                    <div style="margin: 10%;">
                        <ul>
                            <li>
                                <h4><b>12.00-13.00</b></h4>
                            </li>
                            <h5>UI/UX in Digital Product</h5>
                            <li>
                                <h4><b>14.00-15.00</b></h4>
                            </li>
                            <h5>Navigating the Data Jungle</h5>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 timeline-card text-center">
                    <h1><b>DAY 3</b></h1>
                    <h4>05 November 2023</h4>
                    <div style="margin: 10%;">
                        <ul>
                            <li>
                                <h4><b>13.00-14.00</b></h4>
                            </li>
                            <h5>Behind the Production Gamecom</h5>
                            <li>
                                <h4><b>14.00-16.00</b></h4>
                            </li>
                            <h5>Gamecom TeamBooth Exclusive</h5>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Timeline --}}

    <div class="spacer"></div>
    <div class="spacer"></div>

    {{-- Location --}}
    <div class="container-location">
        <div class="row m-0 p-0">
            <div class="col-12 text-center">
                <h1 class="p-3"><b>LOCATION</b></h1>
            </div>
            <div class="row m-0 p-0">
                <div class="col-3 container-bubble text-center">
                    <img src="{{ asset('assets') }}/img/bubble.png" style="transform: rotate(180deg) scale(0.8, 0.8);">
                </div>
                <div class="col-6 text-center background-location p-4">
                    <h4 class="pb-3 text-white">
                        <b>V-Junction Lt 3 <br> Ciputra World Surabaya</b>
                    </h4>
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1836.620385866795!2d112.71896786846303!3d-7.293308027074949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8bdc3056ef%3A0xb940ebcd5368b020!2sCiputra%20World%2C%20Gn.%20Sari%2C%20Kec.%20Dukuhpakis%2C%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1695630405605!5m2!1sen!2sid"
                    width="100%" height="83%" style="border:0; border-radius: 3%;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-3 container-bubble text-center">
                    <img src="{{ asset('assets') }}/img/bubble.png">
                </div>
            </div>
        </div>
    </div>
    {{-- End of Location --}}

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
</div>
@endsection