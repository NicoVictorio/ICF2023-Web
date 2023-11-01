@extends('layouts.app')
@section('content')
<style>
    .container-map {
        padding: 0;
        margin: 0;
        height: 100%;
        background: linear-gradient(to right,
                #EE6767 0%,
                #EE6767 50%,
                #85C0E7 50%,
                #85C0E7 100%);
    }

    .container-map h1 {
        font-weight: bold;
        font-size: 125px;
    }

    @media screen and (max-width:768px) {
        .container-map h1 {
            font-size: 35px;
        }

        .container-map .text-top {
            padding: 5% 0 0 3%;
        }

        .container-map .text-bottom {
            padding: 0 5% 5% 0;
        }
    }

    .container-map .text-top {
        padding: 2% 0 0 3%;
    }

    .container-map .text-bottom {
        padding: 0 5% 3% 0;
    }

    .container-map .maskot {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-map .maskot img {
        width: 30vw;
    }

    /* .row {
        border: 1px solid black;
    } */

    .stages {
        border: 1px solid #E83434;
        border-radius: 10px;
        height: 140px;
        margin-bottom: 20px;
    }

    .duduk {
        border: 1px solid #E83434;
        background: #E83434;
        border-radius: 10px;
        height: 140px;
        margin-bottom: 20px;
    }

    .vr-expo {
        border: 1px solid #5CABDF;
        border-radius: 10px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .reg {
        border: 1px solid #5CABDF;
        background: #5CABDF;
        border-radius: 10px;
        height: 70px;
    }

    .ta {
        border: 1px solid black;
        border-radius: 10px;
        height: 50px;
        text-align: center;
    }

    .bdg {
        border: 1px solid #5CABDF;
        border-radius: 10px;
        height: 100px;
        margin: 30px 0px;
        text-align: center;
        color: #5CABDF;
    }

    .photobooth {
        border: 1px solid #E83434;
        border-radius: 10px;
        height: 50px;
        color: #E83434;
        text-align: center;
        margin-bottom: 20px;
    }

    .gerbang {
        border: 1px solid #E83434;
        border-radius: 10px;
        height: 50px;
        text-align: center;
        margin-bottom: 20px;
    }

    .box {
        border: 2px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 100%;
        margin-bottom: 3% !important;
    }
</style>

<div class="container-map w-100">
    <div class="text-top">
        <h1 class="text-white m-0">COMING</h1>
        <h1 class="text-white m-0">SOON</h1>
    </div>
    <div class="maskot">
        <img src="{{ asset('assets') }}/img/maskot3.png">
    </div>
    <div class="text-bottom">
        <h1 class="text-white m-0 d-flex justify-content-end">COMING</h1>
        <h1 class="text-white m-0 d-flex justify-content-end">SOON</h1>    
    </div>
</div>

<!-- <div class="container-xl">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center p-5"><b>PETA TREASURE</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            area mini games
        </div>
        <div class="col-7">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8 stages d-flex justify-content-center align-items-center">
                    <h1><b>STAGES</b></h1>
                </div>
                <div class="col-2">

                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="row">
                        <div class="col-12 vr-expo">
                            <h6><b>VR EXPO</b></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 reg d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><b>REGISTRASI</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-8 duduk d-flex justify-content-center align-items-center">
                    <h1 class="text-white"><b>DUDUK STAGES/PENGUNJUNG</b></h1>
                </div>
                <div class="col-2">
                    <div class="row">
                        <div class="col-12 vr-expo d-flex justify-content-center align-items-center">
                            <h4><b>VR EXPO</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 vr-expo d-flex justify-content-center align-items-center">
                            <h4><b>VR EXPO</b></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1">

        </div>
    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-1 ta">
                    <h4><b>TA</b></h4>
                </div>
                <div class="col-1 ta">
                    <h4><b>TA</b></h4>
                </div>
                <div class="col-1 ta">
                    <h4><b>TA</b></h4>
                </div>
                <div class="col-1 ta">
                    <h4><b>TA</b></h4>
                </div>
                <div class="col-1 ta">
                    <h4><b>TA</b></h4>
                </div>
                <div class="col-1 ta">
                    <h4><b>TA</b></h4>
                </div>
                <div class="col-3">

                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 bdg">
                            <h1><b>BOARD GAME</b></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 bdg">
                            <h1><b>BOARD GAME</b></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 photobooth">
                            <h4><b>PHOTOBOOTH</b></h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h4><b>TA</b></h4>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8 gerbang">
                    <h4><b>GAPURA/GERBANG PINTU MASUK TA</b></h4>
                </div>
                <div class="col-2">

                </div>
            </div>
        </div>
        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question1">
                <div class="col-11">
                    <h4>Apa itu ICF 2023?</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow1" onclick="q1()">
                    <div class="arrow1">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer1">
            </div>
        </div>
    </div>
</div> -->
@endsection

@section('script')
<!-- <script type="text/javascript">
    const q1 = () => {
        $('.question1').css({ "background-color": "#E83434", "border-radius": "8px", "color": "white" });

        $('.answer1').html(`
            <h5>ICF kepanjangan dari Informatics Creative Festival merupakan festival yang memamerkan hasil karya Tugas
                Akhir mahasiswa/i Teknik Informatika Universitas Surabaya.</h5>
        `);

        $('.answer1').css({ "padding": "2%" });

        $('.arrow1').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);

        $('.container-arrow1').removeAttr("onclick");
        $('.container-arrow1').attr("onclick", "c1()");
    }

    const c1 = () => {
        $('.question1').css({ "background-color": "transparent", "color": "#212529" });

        $('.answer1').html(``);

        $('.answer1').css({ "padding": "0%" });

        $('.arrow1').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);

        $('.container-arrow1').removeAttr("onclick");
        $('.container-arrow1').attr("onclick", "q1()");
    }
</script> -->
@endsection