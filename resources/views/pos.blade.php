@extends('layouts.app')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    section {
        padding-top: 5%;
        padding-bottom: 5%;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        /* min-height: 100vh; */
        background: url("{{ asset('assets') }}/img/bg-event.png");
        background-size: cover;
        background-position: center;
    }

    .login-box {
        position: relative;
        padding: 3%;
        width: 40%;
        min-height: 400px;
        background: linear-gradient(to bottom right, rgba(71, 182, 255, 0.3), rgba(254, 43, 43, 0.3));
        background-color: transparent;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(15px);
    }

    h2 {
        font-size: 2em;
        color: white;
        text-align: center;
    }

    .input-box {
        position: relative;
        width: 310px;
        margin: 30px 0;
        border-bottom: 2px solid #fff;
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 1em;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        top: -5px;
    }

    .input-box input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        color: #fff;
        padding: 0 35px 0 5px;
    }

    .input-box .icon {
        position: absolute;
        right: 8px;
        color: #fff;
        font-size: 1.2em;
        line-height: 57px;
    }

    button {
        width: 100%;
        height: 40px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 1em;
        color: #000;
        font-weight: 500;
    }

    @media (max-width:768px) {
        .login-box {
            width: 80%;
            padding: 10%;
        }

        h2{
            font-size: 24px;
            margin-bottom: 40px !important;
        }
    }

    @media (max-width:360px) {
        .login-box {
            width: 100%;
            height: 100vh;
            border: none;
            border-radius: 0;
        }
    }
</style>

<section>
    <div class="login-box row">
        <h2 style="margin-bottom: 70px;">{{ $namaPos[0]->nama }}</h2>
        <div class="input-box">
            <input type="text" name="namaPengunjung" id="pengunjung" required>
            <label>Nama</label>
        </div>
        <button type="submit" value="Submit" id="btnSubmit" name="submit" style="margin-top:70px;"
            onclick="simpan({{ $posId }})">Submit</button>
    </div>
</section>

<script type="text/javascript">
    const simpan = (id) => {
        let nama = $('#pengunjung').val();
        let idPos = id;

        $.ajax({
            type:"POST",
            url:"{{route('simpan.data')}}",
            data:{
                "_token" : "<?php echo csrf_token();?>",
                "name" : nama,
                "Pos_id" : idPos,
            },

            success: function(data)
            {
                alert("Terima kasih karena telah mengunjungi pos " + data.namaPos.nama + ". Silahkan tunjukan ini ke penjaga pos.");
                window.location.href = 'https://icfubaya2023.com';
            }
        })
    }
</script>
@yield('content')
@endsection