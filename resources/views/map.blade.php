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
        height: 120px;
    }

    .duduk {
        border: 1px solid #E83434;
        background: #E83434;
        border-radius: 10px;
        height: 120px;
    }

    .vr-expo {
        border: 1px solid #5CABDF;
        border-radius: 10px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .reg {
        border: 1px solid #5CABDF;
        background: #5CABDF;
        border-radius: 10px;
        height: 60px;
    }

    .ta {
        border: 1px solid black;
        border-radius: 10px;
        height: 50px;
    }

    .bdg {
        border: 1px solid #5CABDF;
        border-radius: 10px;
        height: 100px;
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
            <h1 class="text-center p-5"><b>PETA TREASURE</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <!-- area mini games -->
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
        </div>
    </div>
</div>
@endsection