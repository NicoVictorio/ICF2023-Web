@extends('layouts.app')
@section('content')
<style>
    *{
        font-family: 'Montserrat', sans-serif;
    }
    .container{
        max-width: 100%;
        background-color: #ffff;
        text-align: center:
    }
    .title{
        text-align: center;
        font-size: 40px;
        margin-top: 35px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
    }
    .photo-section{
        display: flex;
        flex-wrap: wrap;
        grid-template-columns: repeat(2,1fr);
        grid-gap: 30px;
        padding: 30px;
        justify-content: center;
    }
    .photo_doc{
        width: 300px;
        height: auto;
        margin: 10px;
        position: relative;
    }
    .photo-doc img{
        width: 100%;
        height: auto;
    }
    /*.frame{
        /*width: 300px;
        height: 200px;
        border: 5px solid transparent;
        border-image: linear-gradient(0deg, #ee6767, #85c0e7);
        border-image-slice: 1;
        border-radius: 15px;
        border: double 5px transparent;
        background-image: linear-gradient(white, white), 
        linear-gradient(10deg, #ee6767, #85c0e7);
        background-origin: border-box;
        background-clip: content-box, border-box;
        overflow: hidden;*/
    .frame img{
        width: 100%;
        height: auto;
    }
</style>
<div class="container">
    <div class="title">
        <ul>
            <l1>INFORMATICS  </l1><l2 style="color:#ee6767">  CREATIVE </l2><l3 style="color:#85c0e7"> FESTIVAL 2022</l3>
        </ul>
    </div>
    <div class="photo-section">
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto1.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto2.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto3.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto4.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto5.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto6.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto7.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto8.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto9.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto10.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto11.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto12.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto13.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto14.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto15.png">
            </div>
        </div>
        <div class="col-lg-5">
            <div class="photo-doc">
                <img src="{{ asset('assets') }}/img/foto16.png">
            </div>
        </div>
    </div>
</div>
@endsection