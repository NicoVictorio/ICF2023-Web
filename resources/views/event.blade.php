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
        border-radius: 10%;
        backdrop-filter: blur(40px);
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