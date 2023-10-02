@extends('layouts.app')
@section('content')
<style>
    h2,
    h3 {
        color: #223883;
        margin: 0px 0px 15px 40px;
    }

    label {
        color: #223883;
        margin: 10px 0px 10px 40px;
        font-size: 24px;
    }

    .line {
        color: navy;
        width: 100%;
    }

    .textbox {
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

    .btn-submit {
        border-radius: 40px;
        background-color: #E83434;
        padding: 5px;
        width: 170px;
        height: 75px;
        border: red;
    }

    hr.line {
        border-top: 3px solid #223883;
    }

    @media (max-width: 768px) {
        .textbox {
            height: 50px;
            border-radius: 40px; 
            padding: 20px;
            font-size: 14px !important;
        }

        h1{
            font-size: 24px;
        }

        h2{
            font-size: 18px;
        }

        h3{
            font-size: 20px;
        }

        label{
            font-size: 16px;
        }

        .row{
            padding: 20px 20px 0px 20px !important;
        }

        .line {
            width: 60% !important;
        }
    }
</style>

<div class="container">
    <div class="row w-100 p-5 m-0 pb-0">
        <h1 class="text-danger text-center"><b>Registration</b></h1>
        <h3 class="text-center p-0 m-0">Mobile Legends: Bang Bang</h3>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-3">
            <h2><b>Nama Tim</b></h2>
        </div>
        <div class="col-8 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="col-12">
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-3">
            <h2><b>Ketua Tim</b></h2>
        </div>
        <div class="col-8 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="col-12">
            <label>Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file-input" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-4">
            <h2><b>Anggota Tim 1</b></h2>
        </div>
        <div class="col-7 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="col-12">
            <label>Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-4">
            <h2><b>Anggota Tim 2</b></h2>
        </div>
        <div class="col-7 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="col-12">
            <label>Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-4">
            <h2><b>Anggota Tim 3</b></h2>
        </div>
        <div class="col-7 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="col-12">
            <label>Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-4">
            <h2><b>Anggota Tim 4</b></h2>
        </div>
        <div class="col-7 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="col-12">
            <label>Nama</label>
            <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0">
        <div class="col-12">
            <h2 style="color: #E83434;"><b>Optional</b></h2>
        </div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0 pt-0">
        <div class="col-5 anggota-logo5">
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                    class="bi bi-plus-square add-5" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <b>Anggota Tim 5</b>
            </h2>
        </div>
        <div class="col-6 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="anggota-5"></div>
    </div>

    <div class="row w-100 p-5 m-0 pb-0 pt-0">
        <div class="col-5 anggota-logo6">
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                    class="bi bi-plus-square add-6" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <b>Anggota Tim 6</b>
            </h2>
        </div>
        <div class="col-6 p-0 d-flex align-items-center">
            <hr class="line w-100">
        </div>
        <div class="anggota-6"></div>
    </div>

    <div class="row w-100 p-5 m-0">
        <div>
            <button class="text-white btn-submit fs-3 text-center">Submit</button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('.add-5').on('click', function() {
        $('.anggota-5').html(`
            <div class="col-12">
                <label>Nama</label>
                <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                    required>
            </div>
            <div class="col-12">
                <label>No. Hp</label>
                <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                    required>
            </div>
            <div class="col-12">
                <label>ID MLBB</label>
                <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
            </div>
            <div class="col-12">
                <label>Identitas KTM/KTP</label>
                <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
            </div>
            <div class="row"><div>
        `);

        $('.anggota-logo5').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-dash-square min-5" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                </svg>
                <b>Anggota Tim 5</b>
            </h2>
        `);
    });

    $('.min-5').on('click', function() {
        $('.anggota-5').html(``);
        $('.anggota-logo5').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                    class="bi bi-plus-square add-5" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <b>Anggota Tim 5</b>
            </h2>
        `);
    });

    $('.add-6').on('click', function() {
        $('.anggota-6').html(`
            <div class="col-12">
                <label>Nama</label>
                <input type="text" name="namaTim" class="textbox fs-3 text-white" placeholder="Isikan Nama Lengkap"
                    required>
            </div>
            <div class="col-12">
                <label>No. Hp</label>
                <input type="text" name="noHp" class="textbox fs-3 text-white" placeholder="Isikan Nomor Hp yang aktif"
                    required>
            </div>
            <div class="col-12">
                <label>ID MLBB</label>
                <input type="text" name="idMLBB" class="textbox fs-3 text-white" placeholder="Isikan ID MLBB" required>
            </div>
            <div class="col-12">
                <label>Identitas KTM/KTP</label>
                <input type="file" id="file" name="idKTM" class="textbox fs-3 text-white" accept="image/*" required>
            </div>
        `);

        $('.anggota-logo6').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-dash-square min-6" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                </svg>
                <b>Anggota Tim 6</b>
            </h2>
        `);
    });

    $('.min-6').on('click', function() {
        $('.anggota-6').html(``);
        $('.anggota-logo6').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                class="bi bi-plus-square add-6" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <b>Anggota Tim 6</b>
            </h2>
        `);
    });
</script>
@endsection