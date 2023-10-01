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
        height: 50%;
        transform: scale(0.8, 0.8);
    }

    .container-bubble2 img {
        height: 50%;
        transform: scale(0.8, 0.8);
    }

    .container-bubble3 img {
        height: 50%;
        transform: rotate(180deg) scale(0.8, 0.8);
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

    .background-location {
        background-color: #E83434;
        border-radius: 3%;
    }

    .more-details {
        background-color: #E83434;
        border: 3px solid white;
        border-radius: 12px;
        position: absolute;
        bottom: 5%;
        left: 5%;
        height: 40px;
        width: 110px;
        font-size: 14px;
        z-index: 0;
    }

    .bg-seminar {
        width: 80%;
        height: auto;
        position: absolute;
        left: 0;
        bottom: 0;
        z-index: -1;
    }

    @media(max-width: 992px) {
        h3 {
            font-size: 20px;
        }
    }

    @media (max-width: 768px) {
        .spacer {
            height: 50px;
        }

        .spacer-1 {
            height: 50px;
            width: auto;
        }

        .spacer-2 {
            height: 50px;
            width: 100%;
        }

        .container-1 {
            padding: 0px !important;
            margin: 0px !important;
        }

        .timeline {
            max-height: 350px !important;
        }

        .maskot1 {
            max-height: 300px !important;
            width: 100%;
        }

        .prize {
            max-height: 360px !important;
            padding-top: 30% !important;
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

        h1 {
            font-size: 32px;
        }

        .container-others{
            margin-left: 6%;
        }

        .container-others h2 {
            font-size: 14px;
        }

        h3 {
            font-size: 16px;
        }

        .seminar h1 {
            margin-top: 10% !important;
            margin-left: 10% !important;
        }

        .card-left,
        .card-center {
            width: 80% !important;
        }

        .card-left h4,
        .card-center h4 {
            font-size: 14px;
        }

        .card-left h5,
        .card-center h5 {
            font-size: 10px;
        }

        .card-left h6,
        .card-center h6 {
            font-size: 8px;
        }

        .details {
            padding: 7px 0px 0px 7px !important;
        }

        .more-details {
            border-radius: 8px;
            height: 20px;
            width: 63px;
            font-size: 8px;
            border: 2px solid white;
        }

        .container-bubble img, .container-bubble2 img, .container-bubble3 img {
            display: none;
        }

        .divhps{
            width: 0%;            
        }

        .container-others .row{
            width: 100%;
        }

        .text-others{
            margin: 5% 2% 20% 2%;
            width: 120%;
        }

        .text-others2{
            width: 120%;
        }

        .timeline-card {
            width: 80%;
            margin-bottom: 0%;
        }

        .background-location h4 {
            font-size: 16px;
        }

        .background-location {
            width: 80%;
            padding: 4% !important;
        }

        .background-location iframe{
            height: 72% !important;
        }

        .game .card {
            width: 45%;
        }

        .cpd .card {
            width: 100%;
            height: 90%;
        }

        .nama p {
            font-size: 10px !important;
        }

        .gambarmaskot{
            margin: 20% !important;
        }

        .game{
            padding-bottom: 10% !important;
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
        <div class="col-6 d-flex flex-wrap justify-content-center maskot1">
            <img class="fix-image headline" src="{{ asset('assets') }}/img/maskot1.png" style="max-height: 600px;">
        </div>
    </div>
    {{-- End of Introductions --}}

    <div class="spacer"></div>

    {{-- Competitions --}}
    <div class="container-1 row my-5 competition">
        <div class="col-12 d-flex flex-wrap justify-content-end p-0">
            <h1 style="margin-right: 5%;"><b>COMPETITIONS</b></h1>
        </div>
        <div class="row h-100 w-100 p-0">
            <div class="col-5 p-0 d-flex flex-wrap align-items-center justify-content-center">
                <img class="fix-image prize" src="{{ asset('assets') }}/img/maskot2.png" style="max-height: 800px;">
            </div>
            <div class="col-7 p-0 d-flex flex-wrap justify-content-center">
                <div class="row py-5 m-0 game w-100">
                    <div class="col-5 card p-0">
                        <div class="gambarmaskot m-5 text-center">
                            <img src="{{ asset('assets') }}/img/iconMaskot.png" style="width:100%; height:100%;">
                        </div>
                        <div class="nama mx-4 mb-2 text-white d-flex justify-content-center">
                            <p class="fs-4 text-center"><b>Asset Game: Main Character Design</b></p>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 card p-0">
                        <div class="gambarmaskot m-5 text-center">
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
                                <div class="gambarmaskot m-5 text-center">
                                    <img src="{{ asset('assets') }}/img/iconMaskot.png"
                                        style="width:100%; height:100%;">
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
    </div>
    {{-- End Of Competitions --}}

    <div class="spacer-1"></div>

    {{-- Seminars --}}
    <div class="row w-100 m-0 seminar">
        <div class="col-12 p-0">
            <h1 class="m-0"><b>SEMINARS</b></h1>
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
                                <button class="more-details text-white" id="seminar1">More Detail</button>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0 bg-seminar">
                        </div>
                        {{-- <div class="col-1"></div> --}}
                        <div class="col-6 p-3">
                            <div class="border foto p-3">
                                <img src="{{ asset('assets') }}/img/vincentius.jpg" style="width:100%; height:100%;">
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
                                <button class="more-details text-white" id="seminar2">More Detail</button>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0 bg-seminar">
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
                                <button class="more-details text-white" id="seminar3">More Detail</button>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0 bg-seminar">
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
                                <button class="more-details text-white" id="seminar4">More Detail</button>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0 bg-seminar">
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
                                <button class="more-details text-white" id="seminar5">More Detail</button>
                            </div>
                            <img src="{{ asset('assets') }}/img/bg-card.png" class="p-0 bg-seminar">
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
            <div class="col-10 p-0">
                <div class="row m-0 p-0">
                    <div class="col-2 p-0 divhps"></div>
                    <div class="col-10 p-0 text-center text-others2">
                        <h1 class="m-0 p-0"><b>OTHERS</b></h1>
                    </div>
                </div>

                <div class="row m-0 p-0">
                    <div class="col-2 p-0 container-bubble2 d-flex align-items-center justify-content-center divhps">
                        <img src="{{ asset('assets') }}/img/bubble2.png">
                    </div>
                    <div class="col-10 p-0 text-center text-others">
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
            <div class="col-2 p-0 container-bubble align-items-center justify-content-center divhps">
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
                        <h4><b>14.00-14.50</b></h4>
                        <h5>Chat GPT allies or enemies</h5>
                        <h4><b>5.00-16.00</b></h4>
                        <h5>How to be Main Character</h5>
                    </div>
                </div>
                <div class="col-lg-4 timeline-card text-center">
                    <h1><b>DAY 2</b></h1>
                    <h4>04 November 2023</h4>
                    <div style="margin: 10%;">
                        <h4><b>12.00-13.00</b></h4>
                        <h5>UI/UX in Digital Product</h5>
                        <h4><b>14.00-15.00</b></h4>
                        <h5>Navigating the Data Jungle</h5>
                    </div>
                </div>
                <div class="col-lg-4 timeline-card text-center">
                    <h1><b>DAY 3</b></h1>
                    <h4>05 November 2023</h4>
                    <div style="margin: 10%;">
                        <h4><b>13.00-14.00</b></h4>
                        <h5>Behind the Production Gamecom</h5>
                        <h4><b>14.00-16.00</b></h4>
                        <h5>Gamecom TeamBooth Exclusive</h5>
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
            <div class="row m-0 p-0 d-flex justify-content-center">
                <div class="col-3 container-bubble3 text-center divhps">
                    <img src="{{ asset('assets') }}/img/bubble.png">
                </div>
                <div class="col-6 text-center background-location p-4" style="height: auto;">
                    <h4 class="pb-3 text-white">
                        <b>V-Junction Lt 3 <br> Ciputra World Surabaya</b>
                    </h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1836.620385866795!2d112.71896786846303!3d-7.293308027074949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8bdc3056ef%3A0xb940ebcd5368b020!2sCiputra%20World%2C%20Gn.%20Sari%2C%20Kec.%20Dukuhpakis%2C%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1695630405605!5m2!1sen!2sid"
                        width="100%" height="83%" style="border:0; border-radius: 3%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-3 container-bubble text-center divhps">
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