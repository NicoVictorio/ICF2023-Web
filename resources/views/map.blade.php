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
        border: 2px solid #E83434;
        height: 140px;
        margin-bottom: 25px;
    }

    .duduk {
        border: 2px solid #E83434;
        background: #E83434;
        height: 140px;
        margin-bottom: 25px;
    }

    .mpr-booth {
        border: 2px solid #5CABDF;
        height: 68px;
        width: 95%;
        margin-bottom: 2px;
    }

    .reg {
        border: 2px solid #5CABDF;
        background: #5CABDF;
        height: 68px;
        width: 95%;
        margin-top: 2px;
    }

    .ta {
        border: 2px solid black;
        height: 60px;
        margin: 2px;
    }

    .vr-expo {
        border: 2px solid #5CABDF;
        height: 60px;
        transform: translateX(50%);
        margin: 2px;
    }

    .bdg {
        border: 1px solid #5CABDF;
        height: 80px;
        width: 80%;
        color: #5CABDF;
    }

    .gerbang {
        border: 1px solid #E83434;
        height: 190px;
        margin: 2px;
    }

    .box {
        border: 2px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 100%;
        margin-bottom: 3% !important;
    }

    .stages, .duduk, .mpr-booth, .reg, .ta, .vr-expo, .bdg, .gerbang{
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    h1, h2, h6{
        margin: 0px;
        padding: 0px;
        text-align: center;
    }
</style>

<!-- <div class="container-map w-100">
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
</div> -->

<div class="container-xl">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center p-5"><b>AREA MAP</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            AREA MINI GAMES
        </div>
        <div class="col-7">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8 stages">
                    <h1><b>STAGES</b></h1>
                </div>
                <div class="col-2">

                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="row">
                        <div class="col-12 mpr-booth">
                            <h6><b>MPR BOOTH</b></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 reg">
                            <h6 class="text-white"><b>REGISTRASI</b></h6>
                        </div>
                    </div>
                </div>
                <div class="col-8 duduk">
                    <h2 class="text-white"><b>DUDUK STAGES/ PENGUNJUNG</b></h2>
                </div>
                <div class="col-2">

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
            <div class="row" style="transform: translateX(-2%); margin-bottom: 20px;">
                <div class="col-1">

                </div>
                <div class="col-1 vr-expo">
                    <h6><b>VR EXPO</b></h6>
                </div>
                <div class="col-1">

                </div>
                <div class="col-1 ta">
                    <h6><b>TA_3</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_4</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_5</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_6</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_7</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_8</b></h6>
                </div>
                <div class="col-1 vr-expo">
                    <h6><b>VR EXPO</b></h6>
                </div>
                <div class="col-2">

                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_2</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_1</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_0</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 gerbang">
                            <h6 style="transform: rotate(90deg);"><b>PINTU MASUK</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 bdg" style="margin: 15% 0% 0%;">
                            <h2><b>BOARD GAME</b></h2>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 bdg" style="margin: 15% 0%;">
                            <h2><b>BOARD GAME</b></h2>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_9</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_10</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_11</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_12</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_13</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">

                        </div>
                        <div class="col-4 ta">
                            <h6><b>TA_14</b></h6>
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="transform: translateX(3%);">
                <div class="col-2">

                </div>
                <div class="col-1 ta">
                    <h6><b>TA_21</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_20</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_19</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_18</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_17</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_16</b></h6>
                </div>
                <div class="col-1 ta">
                    <h6><b>TA_15</b></h6>
                </div>
                <div class="col-2">

                </div>
            </div>
        </div>
        <div class="row p-0 m-0 mt-5 mb-3">
            <h3 style="text-align: center; color: #223883;"><b>KETERANGAN</b></h3>
        </div>
        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question1">
                <div class="col-11">
                    <h4>TA_0</h4>
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
</div>
@endsection

@section('script')
<script type="text/javascript">
    const q1 = () => {
        $('.question1').css({ "background-color": "#E83434", "border-radius": "8px", "color": "white" });

        $('.answer1').html(`
            <h5>TA_0 adalah Tugas Akhir dengan Judul <b>“SISTEM PENERJEMAH BAHASA ISYARAT INDONESIA (BISINDO) BERBASIS VIDEO MENGGUNAKAN ALGORITMA CONVOLUTIONAL NEURAL NETWORK”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Sesilia Shania. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1wHdjbywtph4Z0gA5O2-acurxAwRN0k1B/preview" width="100%" height="480" allow="autoplay"></iframe>            
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

        $('css({ "padding": "0%" });

        $('.arrow1').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);

        $('.container-arrow1').removeAttr("onclick");
        $('.container-arrow1').attr("onclick", "q1()");
    }
</script>
@endsection