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
        border: 2px solid #5CABDF;
        height: 80px;
        width: 80%;
        color: #5CABDF;
    }

    .gerbang {
        border: 2px solid #E83434;
        height: 190px;
        margin: 2px;
    }

    .box {
        border: 2px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 100%;
        margin-bottom: 3% !important;
    }

    .stages,
    .duduk,
    .mpr-booth,
    .reg,
    .ta,
    .vr-expo,
    .bdg,
    .gerbang {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    h1,
    h2,
    h6 {
        margin: 0px;
        padding: 0px;
        text-align: center;
    }

    h4 {
        font-weight: bold;
        margin: 0px;
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
            <div class="row">
                <img src="{{ asset('assets') }}/img/areaminigames.png" style="height: 50%; width: 60%;">
            </div>
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
                    <a href="{{ route('map') }}#ta4" onclick="q4()">
                        <h6><b>TA_3</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta5" onclick="q5()">
                        <h6><b>TA_4</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta6" onclick="q6()">
                        <h6><b>TA_5</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta7" onclick="q7()">
                        <h6><b>TA_6</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta8" onclick="q8()">
                        <h6><b>TA_7</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta9" onclick="q9()">
                        <h6><b>TA_8</b></h6>
                    </a>
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
                            <a href="{{ route('map') }}#ta3" onclick="q3()">
                                <h6><b>TA_2</b></h6>
                            </a>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta2" onclick="q2()">
                                <h6><b>TA_1</b></h6>
                            </a>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta1" onclick="q1()">
                                <h6><b>TA_0</b></h6>
                            </a>
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
                            <a href="{{ route('map') }}#ta10" onclick="q10()">
                                <h6><b>TA_9</b></h6>
                            </a>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta11" onclick="q11()">
                                <h6><b>TA_10</b></h6>
                            </a>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta12" onclick="q12()">
                                <h6><b>TA_11</b></h6>
                            </a>        
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta13" onclick="q13()">
                                <h6><b>TA_12</b></h6>
                            </a>        
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta14" onclick="q14()">
                                <h6><b>TA_13</b></h6>
                            </a>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4 ta">
                            <a href="{{ route('map') }}#ta15" onclick="q15()">
                                <h6><b>TA_14</b></h6>
                            </a>        
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
                    <a href="{{ route('map') }}#ta22" onclick="q22()">
                        <h6><b>TA_21</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta21" onclick="q21()">
                        <h6><b>TA_20</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta20" onclick="q20()">
                        <h6><b>TA_19</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta19" onclick="q19()">
                        <h6><b>TA_18</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta18" onclick="q18()">
                        <h6><b>TA_17</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta17" onclick="q17()">
                        <h6><b>TA_16</b></h6>
                    </a>
                </div>
                <div class="col-1 ta">
                    <a href="{{ route('map') }}#ta16" onclick="q16()">
                        <h6><b>TA_15</b></h6>
                    </a>
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
                <div class="col-11" id="ta1">
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

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question2">
                <div class="col-11" id="ta2">
                    <h4>TA_1</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow2" onclick="q2()">
                    <div class="arrow2">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer2">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question3">
                <div class="col-11" id="ta3">
                    <h4>TA_2</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow3" onclick="q3()">
                    <div class="arrow3">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer3">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question4">
                <div class="col-11" id="ta4">
                    <h4>TA_3</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow4" onclick="q4()">
                    <div class="arrow4">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer4">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question5">
                <div class="col-11" id="ta5">
                    <h4>TA_4</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow5" onclick="q5()">
                    <div class="arrow5">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer5">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question6">
                <div class="col-11" id="ta6">
                    <h4>TA_5</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow6" onclick="q6()">
                    <div class="arrow6">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer6">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question7">
                <div class="col-11" id="ta7">
                    <h4>TA_6</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow7" onclick="q7()">
                    <div class="arrow7">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer7">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question8">
                <div class="col-11" id="ta8">
                    <h4>TA_7</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow8" onclick="q8()">
                    <div class="arrow8">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer8">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question9">
                <div class="col-11" id="ta9">
                    <h4>TA_8</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow9" onclick="q9()">
                    <div class="arrow9">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer9">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question10">
                <div class="col-11" id="ta10">
                    <h4>TA_9</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow10" onclick="q10()">
                    <div class="arrow10">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer10">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question11">
                <div class="col-11" id="ta11">
                    <h4>TA_10</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow11" onclick="q11()">
                    <div class="arrow11">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer11">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question12">
                <div class="col-11" id="ta12">
                    <h4>TA_11</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow12" onclick="q12()">
                    <div class="arrow12">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer12">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question13">
                <div class="col-11" id="ta13">
                    <h4>TA_12</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow13" onclick="q13()">
                    <div class="arrow13">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer13">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question14">
                <div class="col-11" id="ta14">
                    <h4>TA_13</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow14" onclick="q14()">
                    <div class="arrow14">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer14">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question15">
                <div class="col-11" id="ta15">
                    <h4>TA_14</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow15" onclick="q15()">
                    <div class="arrow15">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer15">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question16">
                <div class="col-11" id="ta16">
                    <h4>TA_15</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow16" onclick="q16()">
                    <div class="arrow16">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer16">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question17">
                <div class="col-11" id="ta17">
                    <h4>TA_16</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow17" onclick="q17()">
                    <div class="arrow17">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer17">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question18">
                <div class="col-11" id="ta18">
                    <h4>TA_17</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow18" onclick="q18()">
                    <div class="arrow18">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer18">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question19">
                <div class="col-11" id="ta19">
                    <h4>TA_18</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow19" onclick="q19()">
                    <div class="arrow19">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer19">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question20">
                <div class="col-11" id="ta20">
                    <h4>TA_19</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow20" onclick="q20()">
                    <div class="arrow20">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer20">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question21">
                <div class="col-11" id="ta21">
                    <h4>TA_20</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow21" onclick="q21()">
                    <div class="arrow21">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer21">
            </div>
        </div>

        <div class="row p-0 m-0 box">
            <div class="row p-3 m-0 question22">
                <div class="col-11" id="ta22">
                    <h4>TA_21</h4>
                </div>
                <div class="col-1 p-0 text-center container-arrow22" onclick="q22()">
                    <div class="arrow22">
                        <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                    </div>
                </div>
            </div>
            <div class="col-12 answer22">
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
            <h5>TA_0 adalah Tugas Akhir dengan Judul <b>“Pembuatan Aplikasi Pengenalan Motif Batik Indonesia Berbasis Citra Digital Dengan Metode CNN”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Ricky Andrean Fernanda Gunawan. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
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

        $('.answer1').css({ "padding": "0%" });

        $('.arrow1').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);

        $('.container-arrow1').removeAttr("onclick");
        $('.container-arrow1').attr("onclick", "q1()");
    }

    const q2 = () => {
        $('.question2').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer2').html(`
            <h5>TA_1 adalah Tugas Akhir dengan Judul <b>“Aplikasi Pendeteksi Kanker Kulit 'Melanoma' Menggunakan Convolutional Neural Network”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Angger Arjuna Wigaswara. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1ufRtEJPDYcZiGBPs_yXtiG6mkN_eThtp/preview" width="100%" height="480" allow="autoplay"></iframe>        
        `);

        $('.answer2').css({"padding": "2%"});

        $('.arrow2').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow2').removeAttr("onclick");
        $('.container-arrow2').attr("onclick", "c2()");
    }

    const c2 = () => {
        $('.question2').css({"background-color": "transparent", "color": "#212529"});

        $('.answer2').html(``);

        $('.answer2').css({"padding": "0%"});

        $('.arrow2').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow2').removeAttr("onclick");
        $('.container-arrow2').attr("onclick", "q2()");
    }

    const q3 = () => {
        $('.question3').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer3').html(`
            <h5>TA_2 adalah Tugas Akhir dengan Judul <b>“Pendeteksi Mata Uang Rupiah dari Citra bagi Penyandang Tunanetra Menggunakan Transfer Learning”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Venansius Mario Tando. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1Qz0WzdnuYrmbbq2wWxCFgWC3ThUtyMGR/preview" width="100%" height="480" allow="autoplay"></iframe>        
        `);

        $('.answer3').css({"padding": "2%"});

        $('.arrow3').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow3').removeAttr("onclick");
        $('.container-arrow3').attr("onclick", "c3()");
    }

    const c3 = () => {
        $('.question3').css({"background-color": "transparent", "color": "#212529"});

        $('.answer3').html(``);

        $('.answer3').css({"padding": "0%"});

        $('.arrow3').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow3').removeAttr("onclick");
        $('.container-arrow3').attr("onclick", "q3()");
    }

    const q4 = () => {
        $('.question4').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer4').html(`
            <h5>TA_3 adalah Tugas Akhir dengan Judul <b>“Aplikasi Transliterasi Dari Tulisan Jawa Menjadi Tulisan Romawi Menggunakan Convolution Neutral Network”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Juan Timothy Soebroto. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1ukzS5Ksss3x7Rbkft-biT6ZxWJtYcoFp/preview" width="100%" height="480" allow="autoplay"></iframe>        
        `);

        $('.answer4').css({"padding": "2%"});

        $('.arrow4').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow4').removeAttr("onclick");
        $('.container-arrow4').attr("onclick", "c4()");
    }

    const c4 = () => {
        $('.question4').css({"background-color": "transparent", "color": "#212529"});

        $('.answer4').html(``);

        $('.answer4').css({"padding": "0%"});

        $('.arrow4').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow4').removeAttr("onclick");
        $('.container-arrow4').attr("onclick", "q4()");
    }

    const q5 = () => {
        $('.question5').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer5').html(`
            <h5>TA_4 adalah Tugas Akhir dengan Judul <b>“Pembuatan Layanan Guidance Tour Dalam Sistem Tes Psikologi Online Minat Kejuruan Ubaya Vocational Interest Inventory”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Patrick Liem. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1nIbjR5Tr07z7Jm67Ut8Zvh1pvN6TOL7C/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer5').css({"padding": "2%"});

        $('.arrow5').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow5').removeAttr("onclick");
        $('.container-arrow5').attr("onclick", "c5()");
    }

    const c5 = () => {
        $('.question5').css({"background-color": "transparent", "color": "#212529"});

        $('.answer5').html(``);

        $('.answer5').css({"padding": "0%"});

        $('.arrow5').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow5').removeAttr("onclick");
        $('.container-arrow5').attr("onclick", "q5()");
    }

    const q6 = () => {
        $('.question6').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer6').html(`
            <h5>TA_5 adalah Tugas Akhir dengan Judul <b>“Pembuatan Sistem Informasi Budidaya Ayam Ras Petelur UD Farm Lestari Dengan Material Requirement Planning”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Safira Arinta Azzahra. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1oZoORVdSK5vGQFL7WsCXzVYDzvRYOnrX/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer6').css({"padding": "2%"});

        $('.arrow6').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow6').removeAttr("onclick");
        $('.container-arrow6').attr("onclick", "c6()");
    }

    const c6 = () => {
        $('.question6').css({"background-color": "transparent", "color": "#212529"});

        $('.answer6').html(``);

        $('.answer6').css({"padding": "0%"});

        $('.arrow6').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow6').removeAttr("onclick");
        $('.container-arrow6').attr("onclick", "q6()");
    }

    const q7 = () => {
        $('.question7').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer7').html(`
            <h5>TA_6 adalah Tugas Akhir dengan Judul <b>“Pembuatan Sistem Pendukung Keputusan Pemilihan Rumah Dengan Metode Fuzzy Simple Additive Weighting”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Angger Arjuna Wigaswara. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1OYnn1LEzUTn9dO88DXJnYtyXDeOX09Oo/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer7').css({"padding": "2%"});

        $('.arrow7').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow7').removeAttr("onclick");
        $('.container-arrow7').attr("onclick", "c7()");
    }

    const c7 = () => {
        $('.question7').css({"background-color": "transparent", "color": "#212529"});

        $('.answer7').html(``);

        $('.answer7').css({"padding": "0%"});

        $('.arrow7').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow7').removeAttr("onclick");
        $('.container-arrow7').attr("onclick", "q7()");
    }

    const q8 = () => {
        $('.question8').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer8').html(`
            <h5>TA_7 adalah Tugas Akhir dengan Judul <b>“Pembuatan E-Marketplace Skincare Berbasis Website”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Aldyanto Setiawan Arjuna. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1UTiRE5rO9P8T5WneqR1xo9MiYciNvlD-/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer8').css({"padding": "2%"});

        $('.arrow8').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow8').removeAttr("onclick");
        $('.container-arrow8').attr("onclick", "c8()");
    }

    const c8 = () => {
        $('.question8').css({"background-color": "transparent", "color": "#212529"});

        $('.answer8').html(``);

        $('.answer8').css({"padding": "0%"});

        $('.arrow8').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow8').removeAttr("onclick");
        $('.container-arrow8').attr("onclick", "q8()");
    }

    const q9 = () => {
        $('.question9').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer9').html(`
            <h5>TA_8 adalah Tugas Akhir dengan Judul <b>“Pembuatan Buku Pengenalan Sendi Manusia Dengan Fitur Augmented Reality”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Apriliani. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1MMX85FjRhVnItOH3wmPkwFeOpnK2C1S5/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer9').css({"padding": "2%"});

        $('.arrow9').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow9').removeAttr("onclick");
        $('.container-arrow9').attr("onclick", "c9()");
    }

    const c9 = () => {
        $('.question9').css({"background-color": "transparent", "color": "#212529"});

        $('.answer9').html(``);

        $('.answer9').css({"padding": "0%"});

        $('.arrow9').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow9').removeAttr("onclick");
        $('.container-arrow9').attr("onclick", "q9()");
    }

    const q10 = () => {
        $('.question10').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer10').html(`
            <h5>TA_9 adalah Tugas Akhir dengan Judul <b>“Pembuatan Game Berbasis Struktur Misi Escort”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Jonathan Foe & Darren Osmond Lesmana. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1hf1-6UZNqmNfLGhIPir_XHkBdZ4YnOZG/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer10').css({"padding": "2%"});

        $('.arrow10').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow10').removeAttr("onclick");
        $('.container-arrow10').attr("onclick", "c10()");
    }

    const c10 = () => {
        $('.question10').css({"background-color": "transparent", "color": "#212529"});

        $('.answer10').html(``);

        $('.answer10').css({"padding": "0%"});

        $('.arrow10').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow10').removeAttr("onclick");
        $('.container-arrow10').attr("onclick", "q10()");
    }

    const q11 = () => {
        $('.question11').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer11').html(`
            <h5>TA_10 adalah Tugas Akhir dengan Judul <b>“Semi-Realitic: Pet Simulator”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Anthonius Evan</h5>
        `);

        $('.answer11').css({"padding": "2%"});

        $('.arrow11').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow11').removeAttr("onclick");
        $('.container-arrow11').attr("onclick", "c11()");
    }

    const c11 = () => {
        $('.question11').css({"background-color": "transparent", "color": "#212529"});

        $('.answer11').html(``);

        $('.answer11').css({"padding": "0%"});

        $('.arrow11').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow11').removeAttr("onclick");
        $('.container-arrow11').attr("onclick", "q11()");
    }

    const q12 = () => {
        $('.question12').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer12').html(`
            <h5>TA_11 adalah Tugas Akhir dengan Judul <b>“Pembuatan Tabletop Game "Little Adventure" Untuk Mengenalkan Character Building di Lingkungan Keluarga”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Alvin Fernando. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1mL6GRgOcLAYdw-g03TmPBoYh02lH5qBT/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer12').css({"padding": "2%"});

        $('.arrow12').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow12').removeAttr("onclick");
        $('.container-arrow12').attr("onclick", "c12()");
    }

    const c12 = () => {
        $('.question12').css({"background-color": "transparent", "color": "#212529"});

        $('.answer12').html(``);

        $('.answer12').css({"padding": "0%"});

        $('.arrow12').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow12').removeAttr("onclick");
        $('.container-arrow12').attr("onclick", "q12()");
    }

    const q13 = () => {
        $('.question13').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer13').html(`
            <h5>TA_12 adalah Tugas Akhir dengan Judul <b>“Pembuatan Educational Game Konservasi Ekosistem Laut Berau”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Felix Lokianto. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1YT8xCI_lr_NxWPN5xxnRoIVNdAkG5eG7/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer13').css({"padding": "2%"});

        $('.arrow13').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow13').removeAttr("onclick");
        $('.container-arrow13').attr("onclick", "c13()");
    }

    const c13 = () => {
        $('.question13').css({"background-color": "transparent", "color": "#212529"});

        $('.answer13').html(``);

        $('.answer13').css({"padding": "0%"});

        $('.arrow13').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow13').removeAttr("onclick");
        $('.container-arrow13').attr("onclick", "q13()");
    }

    const q14 = () => {
        $('.question14').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer14').html(`
            <h5>TA_13 adalah Tugas Akhir dengan Judul <b>“Pembuatan Peta Interaktif Sebagai Media Belajar Rumah Adat Nusantara”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Beryl Giraldine. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1Hh78V1YwSmz9LPAhurkTKXFK7Hdxo0RI/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer14').css({"padding": "2%"});

        $('.arrow14').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow14').removeAttr("onclick");
        $('.container-arrow14').attr("onclick", "c14()");
    }

    const c14 = () => {
        $('.question14').css({"background-color": "transparent", "color": "#212529"});

        $('.answer14').html(``);

        $('.answer14').css({"padding": "0%"});

        $('.arrow14').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow14').removeAttr("onclick");
        $('.container-arrow14').attr("onclick", "q14()");
    }

    const q15 = () => {
        $('.question15').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer15').html(`
            <h5>TA_14 adalah Tugas Akhir dengan Judul <b>“Pembuatan Game Edukasi Bahasa Mandarin Tingkat Dasar”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Fonny Tejo. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1_kVxrBudYzWi1jvQCwCWtRv2Bo8XmWiK/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer15').css({"padding": "2%"});

        $('.arrow15').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow15').removeAttr("onclick");
        $('.container-arrow15').attr("onclick", "c15()");
    }

    const c15 = () => {
        $('.question15').css({"background-color": "transparent", "color": "#212529"});

        $('.answer15').html(``);

        $('.answer15').css({"padding": "0%"});

        $('.arrow15').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow15').removeAttr("onclick");
        $('.container-arrow15').attr("onclick", "q15()");
    }

    const q16 = () => {
        $('.question16').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer16').html(`
            <h5>TA_15 adalah Tugas Akhir dengan Judul <b>“Pengenalan Gaya Desain Interior Menggunakan Visualisasi 360”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Marvell. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1yx9BOv8e8yUvNauvKpAkdDNT9p3BMLZv/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer16').css({"padding": "2%"});

        $('.arrow16').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow16').removeAttr("onclick");
        $('.container-arrow16').attr("onclick", "c16()");
    }

    const c16 = () => {
        $('.question16').css({"background-color": "transparent", "color": "#212529"});

        $('.answer16').html(``);

        $('.answer16').css({"padding": "0%"});

        $('.arrow16').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow16').removeAttr("onclick");
        $('.container-arrow16').attr("onclick", "q16()");
    }

    const q17 = () => {
        $('.question17').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer17').html(`
            <h5>TA_16 adalah Tugas Akhir dengan Judul <b>“Pembuatan Digital Tabletop Game untuk Melatih Kecerdasan Visual Spasial”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Vincentius Khresna Wijaya Putra. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1FSKuzoKkorp24FtWxZWGiJ0k5jzHY841/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer17').css({"padding": "2%"});

        $('.arrow17').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow17').removeAttr("onclick");
        $('.container-arrow17').attr("onclick", "c17()");
    }

    const c17 = () => {
        $('.question17').css({"background-color": "transparent", "color": "#212529"});

        $('.answer17').html(``);

        $('.answer17').css({"padding": "0%"});

        $('.arrow17').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow17').removeAttr("onclick");
        $('.container-arrow17').attr("onclick", "q17()");
    }

    const q18 = () => {
        $('.question18').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer18').html(`
            <h5>TA_17 adalah Tugas Akhir dengan Judul <b>“Pembuatan Card Game Edukasi R.A. Kartini Berbasis Augmented Reality”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Angelica Luwito. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1gEOB05jHN-oBS23AD55k0mvLEcyzpbRN/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer18').css({"padding": "2%"});

        $('.arrow18').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow18').removeAttr("onclick");
        $('.container-arrow18').attr("onclick", "c18()");
    }

    const c18 = () => {
        $('.question18').css({"background-color": "transparent", "color": "#212529"});

        $('.answer18').html(``);

        $('.answer18').css({"padding": "0%"});

        $('.arrow18').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow18').removeAttr("onclick");
        $('.container-arrow18').attr("onclick", "q18()");
    }

    const q19 = () => {
        $('.question19').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer19').html(`
            <h5>TA_18 adalah Tugas Akhir dengan Judul <b>“Pembuatan Game 2D RPG Dungeon Dengan Procedural Content Generation Untuk Merancang Level Menggunakan Random Walk Algorithm”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Andre Justin Chiang. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1tJ85pv-gpLpKcxdHtaqltLymCMUW7I3L/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer19').css({"padding": "2%"});

        $('.arrow19').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow19').removeAttr("onclick");
        $('.container-arrow19').attr("onclick", "c19()");
    }

    const c19 = () => {
        $('.question19').css({"background-color": "transparent", "color": "#212529"});

        $('.answer19').html(``);

        $('.answer19').css({"padding": "0%"});

        $('.arrow19').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow19').removeAttr("onclick");
        $('.container-arrow19').attr("onclick", "q19()");
    }

    const q20 = () => {
        $('.question20').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer20').html(`
            <h5>TA_19 adalah Tugas Akhir dengan Judul <b>“Pembuatan Game Online Multiplayer”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Fasyekh Khoirul Mubarrok. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1KAXX86Y8AQTAKMFCpBeXK-vFGMyGpJuB/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer20').css({"padding": "2%"});

        $('.arrow20').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow20').removeAttr("onclick");
        $('.container-arrow20').attr("onclick", "c20()");
    }

    const c20 = () => {
        $('.question20').css({"background-color": "transparent", "color": "#212529"});

        $('.answer20').html(``);

        $('.answer20').css({"padding": "0%"});

        $('.arrow20').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow20').removeAttr("onclick");
        $('.container-arrow20').attr("onclick", "q20()");
    }

    const q21 = () => {
        $('.question21').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer21').html(`
            <h5>TA_20 adalah Tugas Akhir dengan Judul <b>“Pembuatan Sistem Adopsi Hewan Berbasis Customer-To-Customer”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Stephanie Chandra</h5>
        `);

        $('.answer21').css({"padding": "2%"});

        $('.arrow21').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow21').removeAttr("onclick");
        $('.container-arrow21').attr("onclick", "c21()");
    }

    const c21 = () => {
        $('.question21').css({"background-color": "transparent", "color": "#212529"});

        $('.answer21').html(``);

        $('.answer21').css({"padding": "0%"});

        $('.arrow21').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow21').removeAttr("onclick");
        $('.container-arrow21').attr("onclick", "q21()");
    }

    const q22 = () => {
        $('.question22').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer22').html(`
            <h5>TA_21 adalah Tugas Akhir dengan Judul <b>“Penerapan IoT Untuk Mendeteksi Mengantuk pada Sopir Truk Menggunakan Raspberry”</b>.</h5>
            <br>
            <h5>Tugas Akhir ini dikerjakan oleh Nathanael Hendry Susilo. Video informasi terkait karya ini bisa dilihat dibawah ini</h5>
            <br>
            <iframe src="https://drive.google.com/file/d/1o3qsZHMZJTPYD0sA0CgvhK6bXqLOQc2Q/preview" width="100%" height="480" allow="autoplay"></iframe>
        `);

        $('.answer22').css({"padding": "2%"});

        $('.arrow22').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow22').removeAttr("onclick");
        $('.container-arrow22').attr("onclick", "c22()");
    }

    const c22 = () => {
        $('.question22').css({"background-color": "transparent", "color": "#212529"});

        $('.answer22').html(``);

        $('.answer22').css({"padding": "0%"});

        $('.arrow22').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow22').removeAttr("onclick");
        $('.container-arrow22').attr("onclick", "q22()");
    }

</script>
@endsection