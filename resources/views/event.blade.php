@extends('layouts.app')
@section('content')
<style>
    .container-event {
        background-image: url("{{ asset('assets') }}/img/bg-event.png");
        height: 600vh;
        width: 100%;
        background-size: cover;
        position: relative;
    }

    .container-event .seminar {

    }

    .container-event .seminar .seminar-cards {
        position: relative;
        height: 600px;
        background: transparent;
        border: 2px solid white;
        border-radius: 5%;
        backdrop-filter: blur(40px);
    }

    .container-event .seminar .seminar-cards .label .free{
        border: 1px solid white;
        border-radius: 20%;
        padding: 5px;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .container-event .seminar .seminar-cards .label .certificate{
        border: 1px solid white;
        border-radius: 20%;
    }

    .container-event .seminar .seminar-cards .label img {
        position: relative;
        height: 30px;
    }

    .container-event .competitions-cards {

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
                            <div class="col-md-2 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <a style="color: white;">Free</a>
                            </div>
                            <div class="col-md-3 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <a style="color: white;">E-Certificate</a>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="judul">
                    </div>
                    <div class="description">
                    </div>
                </div>
                <div class="row">
                    <div class="registration">
                        <button>Registration</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="competition m-0 p-0">
            <div class="judul d-flex justify-content-center">
                <h1 class="text-white m-0 p-0"><b>COMPETITIONS</b></h1>
            </div>
            <br><br>
            <div class="competition-cards">

            </div>
        </div>
    </div>
</div>
@endsection