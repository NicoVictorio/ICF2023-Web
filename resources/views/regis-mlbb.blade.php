@extends('layouts.app')
@section('content')
<style>
    input[type="file"] {
        display: none;
    }

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
        color: #223883;
        border: 1px solid #223883;
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
        font-size: 26px;
    }

    .inputfile {
        padding: 0;
        padding-top: 15px;
        padding-right: 40px;
        align-items: center;
        color: #223883;
        font-weight: bold;
    }

    @media (max-width: 1026px) {
        h2 {
            font-size: 24px;
            margin: 0px 0px 0px 20px;
        }

        .textbox {
            height: 60px;
            padding: 30px;
            font-size: 24px !important;
        }

        .add-5,
        .add-6,
        .min-5,
        .min-6 {
            width: 28px;
            height: 28px;
        }

        .inputfile {
            padding: 0;
            padding-top: 10px;
            padding-right: 40px;
            align-items: center;
        }
    }

    @media (max-width: 768px) {
        .textbox {
            height: 45px;
            padding: 20px;
            font-size: 14px !important;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 16px;
            margin: 0px 0px 0px 20px;
        }

        h3 {
            font-size: 18px;
        }

        .row {
            padding: 20px 20px 0px 20px !important;
        }

        label {
            font-size: 14px;
            margin: 2px 0px 2px 20px;
        }

        .btn-submit {
            padding: 5px;
            width: 120px;
            height: 45px;
            font-size: 18px;
        }

        .add-5,
        .add-6,
        .min-5,
        .min-6 {
            width: 20px;
            height: 20px;
        }

        .inputfile {
            padding: 0;
            padding-top: 12px;
            padding-right: 20px;
            align-items: center;
        }
    }
</style>

<div class="container-xl">
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
            <input type="text" class="textbox fs-3 text-white namaTim" placeholder="Isikan Nama Tim" required>
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
            <input type="text" class="textbox fs-3 text-white namaKetua" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" class="textbox fs-3 text-white noHpKetua" placeholder="Isikan Nomor Hp yang aktif"
                required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" class="textbox fs-3 text-white idMlbbKetua" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file-upload1" name="idKTMKetua" class="textbox fs-3 text-white" accept="image/*" required>
            <label for="file-upload1" id= "uploadfile1" class="textbox fs-3 m-0 text-end inputfile">
            <span id="filenamecoba1">Choose File</span>
            </label>
            <!-- <label for="file-upload" class="textbox fs-3 text-white"> Choose file</label>
            <input id="file-upload" class = "textbox fs-3 text-white" name='upload_cont_img' type="file" style="display:none;"> -->
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
            <input type="text" class="textbox fs-3 text-white nama1" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" class="textbox fs-3 text-white noHp1" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" class="textbox fs-3 text-white idMlbb1" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file-upload2" name="idKTM1" class="textbox fs-3 text-white" accept="image/*" required>
            <label for="file-upload2" id="uploadfile2" class="textbox fs-3 m-0 text-end inputfile">
            <span id="filenamecoba2">Choose File</span>
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
            <input type="text" class="textbox fs-3 text-white nama2" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" class="textbox fs-3 text-white noHp2" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" class="textbox fs-3 text-white idMlbb2" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file-upload3" name="idKTM2" class="textbox fs-3 text-white" accept="image/*" required>
            <label for="file-upload3" id= "uploadfile3" class="textbox fs-3 m-0 text-end inputfile">
            <span id="filenamecoba3">Choose File</span>
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
            <input type="text" class="textbox fs-3 text-white nama3" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" class="textbox fs-3 text-white noHp3" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" class="textbox fs-3 text-white idMlbb3" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
            <label>Identitas KTM/KTP</label>
            <input type="file" id="file-upload4" name="idKTM3" class="textbox fs-3 text-white" accept="image/*" required>
            <label for="file-upload4" id="uploadfile4" class="textbox fs-3 m-0 text-end inputfile">
            <span id="filenamecoba4">Choose File</span>
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
            <input type="text" class="textbox fs-3 text-white nama4" placeholder="Isikan Nama Lengkap" required>
        </div>
        <div class="col-12">
            <label>No. Hp</label>
            <input type="text" class="textbox fs-3 text-white noHp4" placeholder="Isikan Nomor Hp yang aktif" required>
        </div>
        <div class="col-12">
            <label>ID MLBB</label>
            <input type="text" class="textbox fs-3 text-white idMlbb4" placeholder="Isikan ID MLBB" required>
        </div>
        <div class="col-12">
        <label>Identitas KTM/KTP</label>
            <input type="file" id="file-upload5" name="idKTM4" class="textbox fs-3 text-white" accept="image/*" required>
            <label for="file-upload5" id="uploadfile5" class="textbox fs-3 m-0 text-end inputfile">
            <span id="filenamecoba5">Choose File</span>
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
                    class="bi bi-plus-square add-5" viewBox="0 0 16 16" onclick="changeIconToMinus5()">
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
                    class="bi bi-plus-square add-6" viewBox="0 0 16 16" onclick="changeIconToMinus6()">
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
            <button class="text-white btn-submit text-center" name="btnsubmit" onclick="simpanData()">Submit</button>
        </div>
        <div style="height: 30px;"></div>
    </div>
</div>
@endsection

@section('script')
<?php
if (isset($_POST['btnsubmit'])) {
    if (isset($_FILES['idKTMKetua'])) {
        $filename = $_FILES['idKTMKetua']['tmp_name'];
        $ext = pathinfo($_FILES['idKTMKetua']['name'], PATHINFO_EXTENSION);
        $destination = "../public/assets/ktmktp/seli.$ext";
        move_uploaded_file($filename, $destination);
    }

    // $filename = $_FILES['idKTMKetua']['tmp_name'];
    // $ext = pathinfo($_FILES['idKTMKetua']['tmp_name'], PATHINFO_EXTENSION);
    // $destination = "../public/assets/ktmktp/seli" .$ext;
    // move_uploaded_file($filename, $destination);



}
?>

<script type="text/javascript">
    $('#file-upload1').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload1')[0].files[0].name;
        $('#filenamecoba1').remove();
        $('#uploadfile1').append("<span id='filenamecoba1'>"+file+"</span>");
        });

    $('#file-upload2').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload2')[0].files[0].name;
        $('#filenamecoba2').remove();
        $('#uploadfile2').append("<span id='filenamecoba2'>"+file+"</span>");
        });

    $('#file-upload3').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload3')[0].files[0].name;
        $('#filenamecoba3').remove();
        $('#uploadfile3').append("<span id='filenamecoba3'>"+file+"</span>");
        });

    $('#file-upload4').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload4')[0].files[0].name;
        $('#filenamecoba4').remove();
        $('#uploadfile4').append("<span id='filenamecoba4'>"+file+"</span>");
        });

    $('#file-upload5').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload5')[0].files[0].name;
        $('#filenamecoba5').remove();
        $('#uploadfile5').append("<span id='filenamecoba5'>"+file+"</span>");
        });

    $('#file-upload6').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload6')[0].files[0].name;
        $('#filenamecoba6').remove();
        $('#uploadfile6').append("<span id='filenamecoba6'>"+file+"</span>");
        });

    $('#file-upload7').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload7')[0].files[0].name;
        $('#filenamecoba7').remove();
        $('#uploadfile7').append("<span id='filenamecoba7'>"+file+"</span>");
        });

    const changeIconToMinus5 = () => {
        $('.anggota-5').html(`
            <div class="col-12">
                <label>Nama</label>
                <input type="text" class="textbox fs-3 text-white nama5" placeholder="Isikan Nama Lengkap"
                    required>
            </div>
            <div class="col-12">
                <label>No. Hp</label>
                <input type="text" class="textbox fs-3 text-white noHp5" placeholder="Isikan Nomor Hp yang aktif"
                    required>
            </div>
            <div class="col-12">
                <label>ID MLBB</label>
                <input type="text" class="textbox fs-3 text-white idMlbb5" placeholder="Isikan ID MLBB" required>
            </div>
            <div class="col-12">
                <label>Identitas KTM/KTP</label>
                <input type="file" id="file-upload6" name="idKTM5" class="textbox fs-3 text-white" accept="image/*" required>
                <label for="file-upload6" id="uploadfile6" class="textbox fs-3 m-0 text-end inputfile">
                <span id="filenamecoba6">Choose File</span>
            </div>
            <div style="height: 30px;"></div>
        `);

        // Ubah Jadi -
        $('.anggota-logo5').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-dash-square min-5" 
                viewBox="0 0 16 16" onclick="changeIconToPlus5()">
                <path 
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path 
                    d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                </svg>
                <b>Anggota Tim 5</b>
            </h2>
        `);        
    }

    const changeIconToPlus5 = () => {
        $('.anggota-5').html(``);
        $('.anggota-logo5').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                    class="bi bi-plus-square add-5" viewBox="0 0 16 16" onclick="changeIconToMinus5()">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <b>Anggota Tim 5</b>
            </h2>
        `);
    }

    const changeIconToMinus6 = () => {
        $('.anggota-6').html(`
            <div class="col-12">
                <label>Nama</label>
                <input type="text" class="textbox fs-3 text-white nama6" placeholder="Isikan Nama Lengkap"
                    required>
            </div>
            <div class="col-12">
                <label>No. Hp</label>
                <input type="text" class="textbox fs-3 text-white noHp6" placeholder="Isikan Nomor Hp yang aktif"
                    required>
            </div>
            <div class="col-12">
                <label>ID MLBB</label>
                <input type="text" class="textbox fs-3 text-white idMlbb6" placeholder="Isikan ID MLBB" required>
            </div>
            <div class="col-12">
                <label>Identitas KTM/KTP</label>
                <input type="file" id="file-upload7" name="idKTM6" class="textbox fs-3 text-white" accept="image/*" required>
                <label for="file-upload7" id="uploadfile7" class="textbox fs-3 m-0 text-end inputfile">
                <span id="filenamecoba7">Choose File</span>
            </div>
            <div style="height: 30px;"></div>
        `);

        // Ubah Jadi -
        $('.anggota-logo6').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-dash-square min-6" 
                viewBox="0 0 16 16" onclick="changeIconToPlus6()">
                <path 
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path 
                    d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                </svg>
                <b>Anggota Tim 6</b>
            </h2>
        `);        
    }

    const changeIconToPlus6 = () => {
        $('.anggota-6').html(``);
        $('.anggota-logo6').html(`
            <h2><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                    class="bi bi-plus-square add-6" viewBox="0 0 16 16" onclick="changeIconToMinus6()">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <b>Anggota Tim 6</b>
            </h2>
        `);
    }

    const simpanData = () => {
        let namaTim = $('.namaTim').val();

        let namaKetua = $('.namaKetua').val();
        let nama1 = $('.nama1').val();
        let nama2 = $('.nama2').val();
        let nama3 = $('.nama3').val();
        let nama4 = $('.nama4').val();
        let nama5 = $('.nama5').val();
        let nama6 = $('.nama6').val();

        let noHpKetua = $('.noHpKetua').val();
        let noHp1 = $('.noHp1').val();
        let noHp2 = $('.noHp2').val();
        let noHp3 = $('.noHp3').val();
        let noHp4 = $('.noHp4').val();
        let noHp5 = $('.noHp5').val();
        let noHp6 = $('.noHp6').val();

        let idMlbbKetua = $('.idMlbbKetua').val();
        let idMlbb1 = $('.idMlbb1').val();
        let idMlbb2 = $('.idMlbb2').val();
        let idMlbb3 = $('.idMlbb3').val();  
        let idMlbb4 = $('.idMlbb4').val();
        let idMlbb5 = $('.idMlbb5').val();
        let idMlbb6 = $('.idMlbb6').val();



        // alert(namaKetua + " " + namaKetua + " " + namaKetua + " " + namaKetua + " " + namaKetua + " " + 
        //       namaKetua + " " + namaKetua + " " + namaKetua + " " + namaKetua + " " + namaKetua + " " + 
        //       );

        // idKTMKetua.addEventListener("change", function () {
        //     getImgData();
        // });

        // function getImgData() {
        //     const files = chooseFile.files[0];
        //     if (files) {
        //         const fileReader = new FileReader();
        //         fileReader.readAsDataURL(files);
        //         fileReader.addEventListener("load", function () {
        //             imgPreview.style.display = "block";
        //             imgPreview.innerHTML = '<img src="' + this.result + '" />';
        //         });    
        //     }
        // }
        
        // let ktmKetua = $(this).find('idKTMKetua').text();
        // let ktm1 = $(this).find('idKTM1').text();
        // let ktm2 = $(this).find('idKTM2').text();
        // let ktm3 = $(this).find('idKTM3').text();
        // let ktm4 = $(this).find('idKTM4').text();
        // let ktm5 = $(this).find('idKTM5').text();
        // let ktm6 = $(this).find('idKTM6').text();

        
        if(namaTim=="" || namaKetua=="" || nama1=="" || nama2=="" || nama3=="" || nama4=="" || 
                          noHpKetua=="" || noHp1=="" || noHp2=="" || noHp3=="" || noHp4=="" || 
                          idMlbbKetua=="" || idMlbb1=="" || idMlbb2=="" || idMlbb3=="" || idMlbb4==""){
            alert("Pastikan semua data telah terisi.");
        }
        else{
            $.ajax({
                type: 'POST',
                url: '{{ route("mlbb.registration") }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'namaTim' : namaTim,

                    'namaKetua' : namaKetua,
                    'nama1' : nama1,
                    'nama2' : nama2,
                    'nama3' : nama3,
                    'nama4' : nama4,
                    'nama5' : nama5,
                    'nama6' : nama6,

                    'noHpKetua' : noHpKetua,
                    'noHp1' : noHp1,
                    'noHp2' : noHp2,
                    'noHp3' : noHp3,
                    'noHp4' : noHp4,
                    'noHp5' : noHp5,
                    'noHp6' : noHp6,

                    'idKetua' : idMlbbKetua,
                    'id1' : idMlbb1,
                    'id2' : idMlbb2,
                    'id3' : idMlbb3,
                    'id4' : idMlbb4,
                    'id5' : idMlbb5,
                    'id6' : idMlbb6,
                },
                success: function(data) {
                    alert("Registration Completed");
                }
            });
        }
    }
</script>
@endsection