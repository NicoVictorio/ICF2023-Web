@extends('layouts.app')
@section('content')
<style>
    input[type="file"] {
        display: none;
    }

    .description p {
        font-size: 36px;
    }

    h1 {
        font-size: 48px;
    }

    h6 {
        font-size: 24px;
    }

    button {
        font-size: 28px;
    }

    .container-event {
        background-image: url("{{ asset('assets') }}/img/bg-event.png");
        min-height: 500vh;
        width: 100%;
        background-size: cover;
        position: relative;
    }

    .container-event .seminar .seminar-cards {
        position: relative;
        min-height: 10px;
        background: linear-gradient(to bottom right, rgba(71, 182, 255, 0.3), rgba(254, 43, 43, 0.3));
        border-radius: 30px;
        backdrop-filter: blur(40px);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1);
    }

    .container-event .competition .competition-cards {
        position: relative;
        min-height: 10px;
        background: linear-gradient(to bottom right, rgba(71, 182, 255, 0.3), rgba(254, 43, 43, 0.3));
        border-radius: 30px;
        backdrop-filter: blur(40px);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.1);
    }

    .free {
        border: 3px solid white;
        border-radius: 30px;
        padding: 5px;
        margin: 0px 15px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        height: 60px;
        width: 150px;
    }

    .certificate {
        border: 3px solid white;
        border-radius: 30px;
        padding: 5px;
        margin: 0px 15px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        height: 60px;
        width: 250px;
    }

    .rewards {
        border: 3px solid white;
        border-radius: 30px;
        padding: 5px;
        margin: 0px 15px 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        height: 60px;
        width: 200px;
    }

    .registration .btn-regist {
        border-radius: 30px;
        padding: 5px;
        width: 90%;
        height: 60px;
    }

    .mechanism .btn-mechanism {
        border-radius: 30px;
        padding: 5px;
        width: 90%;
        height: 60px;
    }

    .container-event .seminar .seminar-cards .label img {
        position: relative;
        height: 30px;
    }

    .container-event .competition .competition-cards .label img {
        position: relative;
        height: 30px;
    }

    .spacer {
        height: 200px;
    }

    .textbox {
        width: 100%;
        height: 75px;
        border-radius: 40px;
        border: #8DC4E9;
        background-color: #8DC4E9;
        padding: 40px;
    }

    .combobox {
        width: 100%;
        height: 75px;
        border-radius: 40px;
        border: #8DC4E9;
        background-color: #8DC4E9;
        color: #223883;
        padding-left: 4%;
    }

    .modal label {
        font-size: 24px;
        margin: 2px 0px 2px 20px;
    }

    ::placeholder {
        color: white;
        opacity: 1;
    }

    .inputfile {
        padding: 0;
        padding-top: 15px;
        padding-right: 40px;
        align-items: center;
        color: #223883;
        font-weight: bold;
    }

    /* @media (max-width:1026px) {
        .inputfile {
            padding: 0;
            padding-top: 10px;
            padding-right: 40px;
            align-items: center;
        }
    } */

    @media screen and (max-width:768px) {
        .inputfile {
            padding: 0;
            padding-top: 4% !important;
            padding-right: 20px;
            align-items: center;
        }

        .row {
            padding: 24px !important;
        }

        .label .row {
            padding: 0px !important;
        }

        .free {
            height: 30px;
            width: 85px;
            margin: 0px 10px 10px 0px;
        }

        .certificate {
            height: 30px;
            margin: 0px 10px 10px 0px;
            width: 140px;
        }

        .rewards {
            height: 30px;
            width: 120px;
        }

        .description p {
            font-size: 16px;
        }

        h1 {
            font-size: 24px;
        }

        h6 {
            font-size: 12px;
        }

        button {
            font-size: 12px;
        }

        .container-event .seminar .seminar-cards .label img {
            height: 15px;
        }

        .container-event .seminar .seminar-cards {
            min-height: 620px;
        }

        .container-event .competition .competition-cards .label img {
            height: 15px;
        }

        .container-event .competition .competition-cards {
            min-height: 620px;
        }

        .spacer {
            height: 100px;
        }

        .registration .btn-regist {
            height: 40px;
            margin: 10px;
        }

        .mechanism .btn-mechanism {
            height: 40px;
            margin: 10px;
        }

        .textbox {
            height: 45px;
            padding: 20px;
            font-size: 14px !important;
        }

        .combobox {
            height: 45px;
            padding: 0px 0px 0px 20px;
            font-size: 14px !important;
        }

        .modal label {
            font-size: 14px;
            margin: 2px 0px 2px 20px;
        }
    }
</style>
<div class="container-event">
    <div class="row w-100 p-5 m-0">
        <div class="seminar m-0 p-0">
            <div class="judul d-flex justify-content-center">
                <h1 class="text-white m-0 p-0"><b>SEMINARS</b></h1>
            </div>
            <br><br>
            <div class="seminar-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>ChatGPT Allies or Enemies</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>03 November 2023 || Vincentius Riandaru Prasetyo, M.Cs.</p>
                        <p>Seminar ini bertujuan untuk mengedukasi peserta untuk mengetahui bertapa berdampaknya ChatGPT
                            pada dunia kita saat ini. Efek samping yang diberikan baik itu dalam sisi positif ataupun
                            negatifnya. Sehingga manfaatnya adalah orang bisa mengidentifikasi cara menggunakan ChatGPT
                            yang baik.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0">
                        <button
                            class="border border-white text-grey btn-regist d-flex justify-content-center align-items-center"
                            data-bs-toggle="modal" data-bs-target="#regis-seminar"
                            onclick="showSeminarName('ChatGPT Allies or Enemies', 1)">
                            <b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="seminar-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>How to be the Main Character</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>03 November 2023 || Shannia Olivia</p>
                        <p>Workshop ini akan membahas tentang cara pembuatan karakter desain dari awal hingga pembuatan
                            asset-assetnya. Mulai dari pembuatan base character, cara menambahkan asset mulai dari
                            pakaian, rambut, hingga tambahan aksesoris lainnya. Selain itu juga, akan ada pembahasan
                            tentang hubungan antara color picking dan character personality.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0">
                        <button
                            class="border border-white text-grey btn-regist d-flex justify-content-center align-items-center"
                            data-bs-toggle="modal" data-bs-target="#regis-seminar"
                            onclick="showSeminarName('How to be the Main Character', 2)">
                            <b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="seminar-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>UI/UX in Digital Product</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>04 November 2023 || Lisana, Ph.D.</p>
                        <p>Seminar ini bertujuan untuk memberikan pengalaman kepada peserta untuk mengetahui dasar dari
                            UI dan UX disekitar mereka. Bagaimana pentingnya dalam UI/UX dalam suatu produk digital.
                            Manfaat (serta cara untuk memperolehnya) apa saja yang bisa didapatkan ketika kita
                            memperhatikan UI UX di suatu produk.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0">
                        <button
                            class="border border-white text-grey btn-regist d-flex justify-content-center align-items-center"
                            data-bs-toggle="modal" data-bs-target="#regis-seminar"
                            onclick="showSeminarName('UI/UX in Digital Product', 3)">
                            <b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="seminar-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Navigating the Data Jungle</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>04 November 2023 || Ahmad Hilmy</p>
                        <p>Seminar ini akan membahas tentang pengenalan mengenai Data Analysis dan juga AI. Kemudian
                            Software dan alat yang umum digunakan dalam Data Analysis, dan juga kelebihan dan
                            kekurangannya, dan juga bagaimana AI dalam masa depan di dunia bisnis digital yang dibawakan
                            oleh pakar professional dan ahli dalam bidang ini.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0">
                        <button
                            class="border border-white text-grey btn-regist d-flex justify-content-center align-items-center"
                            data-bs-toggle="modal" data-bs-target="#regis-seminar"
                            onclick="showSeminarName('Navigating the Data Jungle', 4)">
                            <b>Registration</b></button>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="seminar-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Behind the Production of Gamecom Team</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>05 November 2023 || Josevina Gaby</p>
                        <p>Talkshow ini akan membahas pengetahuan seputar studio game kepada masyarakat umum dengan
                            narasumber dari pihak studio game terkenal di Indonesia yaitu Gamecom Team. Topik yang
                            dibahas sangat bervariasi, mulai dari awal produksi game hingga proses rilis sebuah game ke
                            platform-platform tertentu dari pengalaman Gamecom Team studio.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0">
                        <button
                            class="border border-white text-grey btn-regist d-flex justify-content-center align-items-center"
                            data-bs-toggle="modal" data-bs-target="#regis-seminar"
                            onclick="showSeminarName('Behind the Production of Gamecom Team', 5)">
                            <b>Registration</b></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer"></div>

        <div class="competition m-0 p-0">
            <div class="judul d-flex justify-content-center">
                <h1 class="text-white m-0 p-0"><b>COMPETITIONS</b></h1>
            </div>
            <br><br>
            <div class="competition-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                            <div class="col-md-2 rewards">
                                <img src="{{ asset('assets') }}/img/rewards.png">
                                <h6 class="m-0" style="color: white;">Rewards</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Asset Game: Main Character Design</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>03 November 2023</p>
                        <p>Kompetisi "Asset Game: Main Character Design" adalah lomba ICF 2023 untuk membuat sebuah
                            asset game orisinil berupa karakter utama. Selain karakter utama, terdapat beberapa alat
                            dukung karakter yang digambar atau asset seperti pedang, sihir, dan lain-lain.  Untuk
                            informasi lebih lanjut terdapat di mechanisms.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0 mr-5">
                        <button
                            class="border border-white text-grey btn-regist d-inline-block justify-content-center align-items-center me-3"
                            data-bs-toggle="modal" data-bs-target="#regis-lomba">
                            <b>Registration</b></button>
                    </div>
                    <div class="col-5 registration m-0 p-0 mr-5">
                        <a
                            href="https://docs.google.com/document/d/17yYj_G8_9kg1OtlZOkFjp7ay1wKFnp4NKDOWnfHVcmU/edit?usp=sharing">
                            <button
                                class="border border-white text-grey btn-regist d-inline-block justify-content-center align-items-center"><b>Mechanisms</b></button>
                        </a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="competition-cards container-lg">
                <div class="row w-100 p-5 m-0">
                    <div class="label">
                        <div class="row">
                            <div class="col-md-1 free">
                                <img src="{{ asset('assets') }}/img/free.png">
                                <h6 class="m-0" style="color: white;">Free</h6>
                            </div>
                            <div class="col-md-2 certificate">
                                <img src="{{ asset('assets') }}/img/certificate.png">
                                <h6 class="m-0" style="color: white;">E-Certificate</h6>
                            </div>
                            <div class="col-md-2 rewards">
                                <img src="{{ asset('assets') }}/img/rewards.png">
                                <h6 class="m-0" style="color: white;">Rewards</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0 pt-0">
                    <div class="judul">
                        <h1 class="text-white"><b>Mobile Legends: Bang Bang</b></h1>
                    </div>
                    <div class="description text-white">
                        <p>05 November 2023</p>
                        <p>Mobile Legends: Bang Bang adalah ajang kompetisi e-sport bagi para pemain game mobile. Dalam
                            kompetisi ini, pemain akan bersaing dalam tim untuk bersaing strategi, keterampilan, dan
                            keahlian mereka dalam pertempuran tim 5 vs 5 yang intens. Untuk informasi lebih lanjut
                            terdapat di mechanisms.</p>
                    </div>
                </div>
                <div class="row w-100 p-5 m-0" id="btn-regist">
                    <div class="col-5 registration m-0 p-0 mr-5">
                        <a class="nav-link" aria-current="page" href="{{ route('regismlbb') }}">
                            <button
                                class="border border-white text-grey btn-regist d-inline-block justify-content-center align-items-center me-3">
                                <b>Registration</b></button>
                        </a>
                    </div>
                    <div class="col-5 registration m-0 p-0 mr-5">
                        <a
                            href="https://docs.google.com/document/d/1UNOkSqfzVBBBitEJ_O7Xm1NgG0oWmi4moLkvSvVJ1zE/edit?usp=sharing">
                            <button
                                class="border border-white text-grey btn-regist d-inline-block justify-content-center align-items-center"><b>Mechanisms</b></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacer"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="regis-seminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="table-responsive">
                        <div class="judul">
                            <h1 class="fs-3 text-danger" style="text-align: center;"><b>Registration</b></h1>
                            <h2 class="fs-5" style="text-align: center; color:#223883;" id="namaSeminar"></h2>
                        </div>
                        <div class="content m-5" id="contentModal">
                            <div class="col-md-12">
                                <label class="mx-4" style="color: #223883">Nama</label>
                                <input type="text" class="textbox fs-3 text-white nama"
                                    placeholder="Isikan Nama Lengkap" required>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="mx-4" style="color: #223883">No. Hp</label>
                                <input type="tel" class="textbox fs-3 text-white nohp"
                                    placeholder="Isikan Nomor Hp yang aktif" required>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="mx-4" style="color: #223883">Email</label>
                                <input type="email" class="textbox fs-3 text-white email"
                                    placeholder="Isikan Email yang aktif" required>
                            </div>
                            <br>
                            <div class="col-md-12" style="color: #223883;">
                                <label class="mx-4">Asal</label>
                                <select class="form-control combobox fs-3 asalCombobox">
                                    <option value="none" selected disabled>Pilih Asal</option>
                                    <option value="sekolah">Sekolah</option>
                                    <option value="instansi">Instansi</option>
                                    <option value="umum">Masyarakat Umum</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-md-12 tbAsal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="hidden" id="idSeminar">
                    <button type="button" class="btn btn-success" onclick="simpanData()"><i
                            class="fa-solid fa-download edit-icon" style="color: #ffffff;"></i>Submit</button>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" enctype="multipart/form-data" action="{{route('lomba.registration')}}">
        @csrf
        <div class="modal fade" id="regis-lomba" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="table-responsive">
                            <div class="judul">
                                <h1 class="fs-3 text-danger" style="text-align: center;"><b>Registration</b></h1>
                                <h2 class="fs-5" style="text-align: center; color:#223883;">Asset Game: Main Character
                                    Design</h2>
                            </div>
                            <div class="content m-5" id="contentModal">
                                <div class="col-md-12">
                                    <label class="mx-4" style="color: #223883">Nama</label>
                                    <input type="text" name="nama" class="textbox fs-3 text-white namaLomba"
                                        placeholder="Isikan Nama Lengkap" required>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label class="mx-4" style="color: #223883">No. Hp</label>
                                    <input type="tel" name="noHp" class="textbox fs-3 text-white noHpLomba"
                                        placeholder="Isikan Nomor Hp yang aktif" required>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label class="mx-4" style="color: #223883">Email</label>
                                    <input type="email" name='email' class="textbox fs-3 text-white emailLomba"
                                        placeholder="Isikan Email yang aktif" required>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label class="mx-4" style="color: #223883">Identitas KTP</label>
                                    <input type="file" id="file-upload" name="identitasKTP"
                                        class="textbox fs-3 text-white" accept="image/*" required>
                                    <label for="file-upload" id="uploadfile"
                                        class="textbox fs-3 m-0 text-end inputfile" onclick="messageLomba()">
                                        <span id="filename">Choose File</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="hidden" id="idSeminar">
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-download edit-icon"
                                name="btnsubmit" style="color: #ffffff;"></i>Submit</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of Modal --}}
</div>
</form>
@endsection
<?php
 if (isset($_POST['btnsubmit'])) {
    if (isset($_FILES['identitasKTP'])) {
        $filename = $_FILES['identitasKTP']['tmp_name'];
        $ext = pathinfo($_FILES['identitasKTP']['name'], PATHINFO_EXTENSION);
        $destination = "../public/assets/ktmktp/seli.$ext";
        move_uploaded_file($destination, $filename);
    }
}
?>

@section('script')
<script type="text/javascript">
    $('#file-upload').change(function() {
        // var i = $(this).prev('label').clone();
        var file = $('#file-upload')[0].files[0].name;
        $('#filename').remove();
        $('#uploadfile').append("<span id='filename'>"+file+"</span>");
        });
        
    const showSeminarName = (name, id) => {
        $('#namaSeminar').text(name);
        $('#idSeminar').val(id);
    }

    $('.asalCombobox').on('change', function() {
        if(this.value == "sekolah"){
            $('.tbAsal').html(`
                <label class="mx-4" style="color: #223883">Asal Sekolah</label>
                <input type="text" class="textbox fs-3 text-white namaAsal"
                    placeholder="Isikan Nama Sekolah" required>
            `);
        }
        else if(this.value == "instansi"){
            $('.tbAsal').html(`
                <label class="mx-4" style="color: #223883">Asal Instansi</label>
                <input type="text" class="textbox fs-3 text-white namaAsal"
                    placeholder="Isikan Nama Instansi" required>
            `);
        }
        else if(this.value == "umum"){
            $('.tbAsal').html(``);
        }
    });

    const messageLomba = () => {
        $.ajax({
            type: 'POST',
            url: '{{ route("lomba.registration") }}',
            data: {
                '_token': '<?php echo csrf_token(); ?>',
            },
            success: function(data) {
                alert("Registration Completed");
            }
        });
    }

    const simpanData = () => {
        let nama = $('.nama').val();
        let noHp = $('.nohp').val();
        let email = $('.email').val();
        let asal = $('.asalCombobox').val();
        let namaAsal = "gaada";
        if(asal != 'umum'){
            namaAsal = $('.namaAsal').val();
        }
        let idSeminar = $('#idSeminar').val();

        if(nama=="" || noHp=="" || email=="" || asal==null || namaAsal==""){
            alert("Pastikan semua data telah terisi.");
        }
        else{
            $.ajax({
                type: 'POST',
                url: '{{ route("seminar.registration") }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'nama' : nama,
                    'noHp' : noHp,
                    'email' : email,
                    'asal' : asal,
                    'namaAsal' : namaAsal,
                    'idSeminars' : idSeminar,
                },
                success: function(data) {
                    alert("Registration Completed");
                    $('#regis-seminar').modal('hide');
                    $('.nama').val("");
                    $('.nohp').val("");
                    $('.email').val("");
                    $('.asalCombobox').val('0').change();
                    $('.namaAsal').val("");
                    $('.tbAsal').html(``);
                }
            });
        }
    }
</script>
@endsection