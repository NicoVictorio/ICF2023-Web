@extends('layouts.app')
@section('content')
<style>
    .container-treasure {
        padding: 0;
        margin: 0;
        height: 100%;
        background: linear-gradient(to right,
                #EE6767 0%,
                #EE6767 50%,
                #85C0E7 50%,
                #85C0E7 100%);
    }

    .container-treasure h1 {
        font-weight: bold;
        font-size: 125px;
    }

    @media screen and (max-width:768px) {
        .container-treasure h1 {
            font-size: 35px;
        }
        .container-treasure .text-top{
            padding: 5% 0 0 3%;
        }
        .container-treasure .text-bottom{
            padding: 0 5% 5% 0;
        }
    }

    .container-treasure .text-top{
            padding: 2% 0 0 3%;
        }
        .container-treasure .text-bottom{
            padding: 0 5% 3% 0;
        }

    .container-treasure .maskot {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container-treasure .maskot img {
        width: 30vw;
    }
</style>
<div class="container-treasure w-100">
    <div class="text-top">
        <h1 class="text-white m-0">COMING</h1>
        <h1 class="text-white m-0">SOON</h1>
    </div>
    <div class="maskot">
        <img style="" src="{{ asset('assets') }}/img/maskot3.png">
    </div>
    <div class="text-bottom">
        <h1 class="text-white m-0 d-flex justify-content-end">COMING</h1>
        <h1 class="text-white m-0 d-flex justify-content-end">SOON</h1>    
    </div>
</div>
@yield('content')
@endsection