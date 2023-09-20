@extends('layouts.app')
@section('content')
<style>
    p, h2{
        color: #223883;
        margin: 0px 0px 15px 40px;
    }

    label{
        color: #223883;
        margin: 10px 0px 10px 40px;
    }

    .line{
        color: navy;
        width: 100%;
    }

    .textbox{
        width: 100%;
        height: 75px;
        border-radius: 40px;
        border: #8DC4E9;
        background-color: #8DC4E9;
        padding: 40px;
    }

    ::placeholder {
        color: white;
        opacity: 1;
    }

    .btn-submit{
        border-radius: 40px;
        background-color: #E83434;
        padding: 5px;
        width: 170px;
        height: 75px;
        border: red;
    }
    
    hr.line{
        border-top: 3px solid #223883;
    }
</style>

<div class="container">
    <div class="row w-100 p-5 m-0 pb-0">
        <h1 class="text-danger fs-1 text-center"><b>Registration</b></h1>
        <p class="fs-3 text-center p-0 m-0">Mobile Legends: Bang Bang</p>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-md-3">
            <h2><b>Nama Tim</b></h2>
        </div>
        <div class="col-md-8 p-0 d-flex align-items-center"> 
            <hr class="line w-100">
        </div>
        <div class="col-md-12">
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-md-3">
            <h2><b>Ketua Tim</b></h2>
        </div>
        <div class="col-md-8 p-0 d-flex align-items-center"> 
            <hr class="line w-100">
        </div>
        <div class="col-md-12">
            <label class="fs-3">Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">Identitas KTM/KTP</label>
            <input type="file" id="file-input" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-md-4">
            <h2><b>Anggota Tim 1</b></h2>
        </div>
        <div class="col-md-7 p-0 d-flex align-items-center"> 
            <hr class="line w-100">
        </div>
        <div class="col-md-12">
            <label class="fs-3">Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-md-4">
            <h2><b>Anggota Tim 2</b></h2>
        </div>
        <div class="col-md-7 p-0 d-flex align-items-center"> 
            <hr class="line w-100">
        </div>
        <div class="col-md-12">
            <label class="fs-3">Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-md-4">
            <h2><b>Anggota Tim 3</b></h2>
        </div>
        <div class="col-md-7 p-0 d-flex align-items-center"> 
            <hr class="line w-100">
        </div>
        <div class="col-md-12">
            <label class="fs-3">Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-md-4">
            <h2><b>Anggota Tim 4</b></h2>
        </div>
        <div class="col-md-7 p-0 d-flex align-items-center"> 
            <hr class="line w-100">
        </div>
        <div class="col-md-12">
            <label class="fs-3">Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-md-12">
            <label class="fs-3">Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0">
        <div class="col-md-12">
            <h2 style="color: #E83434;"><b>Optional</b></h2>
        </div>
        
    </div>

    <div class="row w-100 p-5 m-0">
        <div>
            <button class="text-white btn-submit fs-3 text-center">Submit</button>
        </div>
    </div>
</div>
@endsection