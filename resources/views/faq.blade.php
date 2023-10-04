@extends('layouts.app')

@section('content')
<style>
    .box {
        border: 2px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 100%;
        margin-bottom: 3% !important;
    }

    .answer {
        border: 1px solid black;
    }

    .question {
        border: 1px solid black;
    }

    .jenis-lomba {
        padding: 1% 0% 3%;
        color: #5CABDF;
    }

    h3 {
        color: #E83434;
        padding: 2% 0%;
    }

    h4 {
        font-weight: bold;
        margin: 0px;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 22px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 16px;
            margin: 0px;
        }

        h5 {
            font-size: 14px;
            padding: 0% 3%;
            margin: 0%;
        }

        .title {
            padding: 20px 0px !important;
        }

        .box img {
            width: 18px !important;
            height: 12px !important;
        }

        .question1,
        .question2,
        .question3,
        .question4,
        .question5,
        .question6,
        .question7,
        .question8,
        .question9,
        .question10,
        .question11,
        .question12,
        .question13,
        .question14,
        .question15,
        .question16,
        .question17,
        .question18,
        .question19,
        .question20,
        .question21,
        .question22,
        .question23,
        .question24,
        .question25,
        .question26,
        .question27,
        .question28,
        .question29 {
            padding: 8px !important;
        }
    }
</style>

<div class="container-xl">
    <div class="row w-100 m-0 py-5 title">
        <div class="col-12">
            <h1><b>Frequently Asked Questions (FAQs)</b></h1>
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-12">
            <h3><b>A. Umum</b></h3>
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question1">
            <div class="col-11">
                <h4>Apa itu ICF 2023?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow1" onclick="q1()">
                <div class="arrow1">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer1">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question2">
            <div class="col-11">
                <h4>Apa tema yang diangkat dalam ICF 2023 ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow2" onclick="q2()">
                <div class="arrow2">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer2">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question3">
            <div class="col-11">
                <h4>Apakah acara dan lomba dalam ICF 2023 ini ditarik biaya?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow3" onclick="q3()">
                <div class="arrow3">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer3">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question4">
            <div class="col-11">
                <h4>Ada kegiatan apa saja di ICF 2023?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow4" onclick="q4()">
                <div class="arrow4">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer4">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question5">
            <div class="col-11">
                <h4>Kenapa harus ikut ICF 2023?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow5" onclick="q5()">
                <div class="arrow5">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer5">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question6">
            <div class="col-11">
                <h4>Manfaat apa yang akan didapatkan jika mengikut ICF 2023?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow6" onclick="q6()">
                <div class="arrow6">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer6">
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-12">
            <h3><b>B. Kegiatan</b></h3>
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question7">
            <div class="col-11">
                <h4>Bagaimana cara saya mendaftar untuk kegiatan ICF 2023 ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow7" onclick="q7()">
                <div class="arrow7">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer7">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question8">
            <div class="col-11">
                <h4>Kapan batas akhir pendaftaran kegiatan ICF 2023?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow8" onclick="q8()">
                <div class="arrow8">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer8">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question9">
            <div class="col-11">
                <h4>Siapa saja yang dapat berpartisipasi?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow9" onclick="q9()">
                <div class="arrow9">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer9">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question10">
            <div class="col-11">
                <h4>Kapan dan dimana acara seminar ICF 2023 akan berlangsung?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow10" onclick="q10()">
                <div class="arrow10">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer10">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question11">
            <div class="col-11">
                <h4>Apakah saya akan mendapatkan sertifikat sebagai peserta?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow11" onclick="q11()">
                <div class="arrow11">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer11">
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-12">
            <h3><b>C. Lomba</b></h3>
            <h4 class="jenis-lomba">1. Lomba MLBB</h4>
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question12">
            <div class="col-11">
                <h4>Kenapa lomba MLBB dilaksanakan terlebih dahulu di tanggal 29 Oktober?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow12" onclick="q12()">
                <div class="arrow12">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer12">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question13">
            <div class="col-11">
                <h4>Siapa saja yang dapat berpartisipasi dalam lomba MLBB?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow13" onclick="q13()">
                <div class="arrow13">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer13">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question14">
            <div class="col-11">
                <h4>Bagaimana cara mendaftar lomba MLBB?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow14" onclick="q14()">
                <div class="arrow14">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer14">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question15">
            <div class="col-11">
                <h4>Berapa jumlah orang dalam satu tim?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow15" onclick="q15()">
                <div class="arrow15">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer15">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question16">
            <div class="col-11">
                <h4>Bagaimana tahapan kompetisi lomba MLBB?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow16" onclick="q16()">
                <div class="arrow16">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer16">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question17">
            <div class="col-11">
                <h4>Seperti apa hadiah bagi pemenang lomba MLBB?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow17" onclick="q17()">
                <div class="arrow17">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer17">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question18">
            <div class="col-11">
                <h4>Apa saja hal yang dapat membuat peserta didiskualifikasi?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow18" onclick="q18()">
                <div class="arrow18">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer18">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question19">
            <div class="col-11">
                <h4>Siapa yang dapat saya hubungi jika masih memiliki pertanyaan?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow19" onclick="q19()">
                <div class="arrow19">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer19">
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-12">
            <h4 class="jenis-lomba">2. Lomba Asset Game Character Design</h4>
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question20">
            <div class="col-11">
                <h4>Siapa saja yang dapat berpartisipasi dalam lomba ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow20" onclick="q20()">
                <div class="arrow20">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer20">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question21">
            <div class="col-11">
                <h4>Bagaimana cara mendaftar lomba ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow21" onclick="q21()">
                <div class="arrow21">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer21">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question22">
            <div class="col-11">
                <h4>Lomba ini bersifat tim/individu?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow22" onclick="q22()">
                <div class="arrow22">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer22">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question23">
            <div class="col-11">
                <h4>Software apa yang diperbolehkan dalam kompetisi ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow23" onclick="q23()">
                <div class="arrow23">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer23">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question24">
            <div class="col-11">
                <h4>Hardware apa yang diperbolehkan dalam kompetisi ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow24" onclick="q24()">
                <div class="arrow24">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer24">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question25">
            <div class="col-11">
                <h4>Peralatan apa aja yang disediakan panitia untuk lomba ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow25" onclick="q25()">
                <div class="arrow25">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer25">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question26">
            <div class="col-11">
                <h4>Bagaimana metode kompetisi lomba ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow26" onclick="q26()">
                <div class="arrow26">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer26">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question27">
            <div class="col-11">
                <h4>Kapan Technical Meeting lomba ini?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow27" onclick="q27()">
                <div class="arrow27">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer27">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question28">
            <div class="col-11">
                <h4>Siapa yang saya dapat hubungi jika masih memiliki pertanyaan?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow28" onclick="q28()">
                <div class="arrow28">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer28">
        </div>
    </div>

    <div class="row p-0 m-0 box">
        <div class="row p-3 m-0 question29">
            <div class="col-11">
                <h4>Bagaimana jika saya tidak mempunyai KTP (kartu tanda pelajar)?</h4>
            </div>
            <div class="col-1 p-0 text-center container-arrow29" onclick="q29()">
                <div class="arrow29">
                    <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
                </div>
            </div>
        </div>
        <div class="col-12 answer29">
        </div>
    </div>

    <div style="height: 50px;"></div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    const q1 = () => {
        $('.question1').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer1').html(`
            <h5>ICF kepanjangan dari Informatics Creative Festival merupakan festival yang memamerkan hasil karya Tugas
                Akhir mahasiswa/i Teknik Informatika Universitas Surabaya.</h5>
        `);

        $('.answer1').css({"padding": "2%"});

        $('.arrow1').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow1').removeAttr("onclick");
        $('.container-arrow1').attr("onclick", "c1()");
    }

    const c1 = () => {
        $('.question1').css({"background-color": "transparent", "color": "#212529"});

        $('.answer1').html(``);

        $('.answer1').css({"padding": "0%"});

        $('.arrow1').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow1').removeAttr("onclick");
        $('.container-arrow1').attr("onclick", "q1()");
    }

    const q2 = () => {
        $('.question2').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer2').html(`
            <h5>TechUnleashed: Creativity Beyond Reality.</h5>
        `);

        $('.answer2').css({"padding": "2%"});

        $('.arrow2').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow2').removeAttr("onclick");
        $('.container-arrow2').attr("onclick", "c2()");
    }

    const c2 = () => {
        $('.question2').css({"background-color": "transparent", "color": "#212529"});

        $('.answer2').html(``);

        $('.answer2').css({"padding": "0%"});

        $('.arrow2').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow2').removeAttr("onclick");
        $('.container-arrow2').attr("onclick", "q2()");
    }

    const q3 = () => {
        $('.question3').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer3').html(`
            <h5>Semua acara dan lomba dalam ICF 2023 dapat diikuti secara gratis.</h5>
        `);

        $('.answer3').css({"padding": "2%"});

        $('.arrow3').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow3').removeAttr("onclick");
        $('.container-arrow3').attr("onclick", "c3()");
    }

    const c3 = () => {
        $('.question3').css({"background-color": "transparent", "color": "#212529"});

        $('.answer3').html(``);

        $('.answer3').css({"padding": "0%"});

        $('.arrow3').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow3').removeAttr("onclick");
        $('.container-arrow3').attr("onclick", "q3()");
    }

    const q4 = () => {
        $('.question4').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer4').html(`
            <h5>Terdapat seminar, workshop, talkshow seputar dunia teknologi dan berbagai lomba yang seru. 
                Serta terdapat mini-games yang bisa dimainkan secara gratis!!</h5>
        `);

        $('.answer4').css({"padding": "2%"});

        $('.arrow4').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow4').removeAttr("onclick");
        $('.container-arrow4').attr("onclick", "c4()");
    }

    const c4 = () => {
        $('.question4').css({"background-color": "transparent", "color": "#212529"});

        $('.answer4').html(``);

        $('.answer4').css({"padding": "0%"});

        $('.arrow4').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow4').removeAttr("onclick");
        $('.container-arrow4').attr("onclick", "q4()");
    }

    const q5 = () => {
        $('.question5').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer5').html(`
            <h5>Karena ICF 2023 saat ini memiliki banyak kegiatan lhoo seperti ada seminar teknologi, 
                lomba nya juga seru-seru, dan banyak hadiah menarik. Dan kamu bisa ikut secara gratis!!</h5>
        `);

        $('.answer5').css({"padding": "2%"});

        $('.arrow5').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow5').removeAttr("onclick");
        $('.container-arrow5').attr("onclick", "c5()");
    }

    const c5 = () => {
        $('.question5').css({"background-color": "transparent", "color": "#212529"});

        $('.answer5').html(``);

        $('.answer5').css({"padding": "0%"});

        $('.arrow5').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow5').removeAttr("onclick");
        $('.container-arrow5').attr("onclick", "q5()");
    }

    const q6 = () => {
        $('.question6').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer6').html(`
            <h5>Kamu akan dapat banyak ilmu terkait Talkshow Dunia Studio Game, User Interface/ User Experience, 
                dan masih banyak lagi. Selain itu kamu juga bisa seru-seruan dengan ikut berbagai lomba-lomba yang 
                tersedia seperti Mobile Legends: Bang Bang Competition dan juga Asset Game Character Design!!</h5>
        `);

        $('.answer6').css({"padding": "2%"});

        $('.arrow6').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow6').removeAttr("onclick");
        $('.container-arrow6').attr("onclick", "c6()");
    }

    const c6 = () => {
        $('.question6').css({"background-color": "transparent", "color": "#212529"});

        $('.answer6').html(``);

        $('.answer6').css({"padding": "0%"});

        $('.arrow6').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow6').removeAttr("onclick");
        $('.container-arrow6').attr("onclick", "q6()");
    }

    const q7 = () => {
        $('.question7').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer7').html(`
            <h5>Untuk pendaftaran, kamu bisa melihat video tutorial melalui link berikut: https://drive.google.com/drive/folders/1YJGMp7iHz4K-HRvpBX_eqVZMiB_zBZOz?usp=sharing</h5>
        `);

        $('.answer7').css({"padding": "2%"});

        $('.arrow7').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow7').removeAttr("onclick");
        $('.container-arrow7').attr("onclick", "c7()");
    }

    const c7 = () => {
        $('.question7').css({"background-color": "transparent", "color": "#212529"});

        $('.answer7').html(``);

        $('.answer7').css({"padding": "0%"});

        $('.arrow7').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow7').removeAttr("onclick");
        $('.container-arrow7').attr("onclick", "q7()");
    }

    const q8 = () => {
        $('.question8').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer8').html(`
            <h5>Untuk seminar, pendaftaran terakhir tanggal 2 November 2023 pada pukul 23:59 Waktu Indonesia Barat (WIB). 
                Sedangkan untuk Kompetisi, batas akhirnya adalah 28 Oktober 2023 pada pukul 23:59 Waktu Indonesia Barat (WIB).</h5>
        `);

        $('.answer8').css({"padding": "2%"});

        $('.arrow8').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow8').removeAttr("onclick");
        $('.container-arrow8').attr("onclick", "c8()");
    }

    const c8 = () => {
        $('.question8').css({"background-color": "transparent", "color": "#212529"});

        $('.answer8').html(``);

        $('.answer8').css({"padding": "0%"});

        $('.arrow8').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow8').removeAttr("onclick");
        $('.container-arrow8').attr("onclick", "q8()");
    }

    const q9 = () => {
        $('.question9').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer9').html(`
            <h5>Semua kegiatan di ICF 2023 dapat diikuti oleh peserta secara umum serta gratis!!</h5>
        `);

        $('.answer9').css({"padding": "2%"});

        $('.arrow9').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow9').removeAttr("onclick");
        $('.container-arrow9').attr("onclick", "c9()");
    }

    const c9 = () => {
        $('.question9').css({"background-color": "transparent", "color": "#212529"});

        $('.answer9').html(``);

        $('.answer9').css({"padding": "0%"});

        $('.arrow9').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow9').removeAttr("onclick");
        $('.container-arrow9').attr("onclick", "q9()");
    }

    const q10 = () => {
        $('.question10').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer10').html(`
            <h5>ICF 2023 akan dilaksanakan di Ciputra World Lantai 3, Surabaya. Dari tanggal 3-5 November 2023.</h5>
        `);

        $('.answer10').css({"padding": "2%"});

        $('.arrow10').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow10').removeAttr("onclick");
        $('.container-arrow10').attr("onclick", "c10()");
    }

    const c10 = () => {
        $('.question10').css({"background-color": "transparent", "color": "#212529"});

        $('.answer10').html(``);

        $('.answer10').css({"padding": "0%"});

        $('.arrow10').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow10').removeAttr("onclick");
        $('.container-arrow10').attr("onclick", "q10()");
    }

    const q11 = () => {
        $('.question11').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer11').html(`
            <h5>Setiap peserta lomba dan seminar akan mendapatkan sertifikat peserta maupun sertifikat pemenang bagi pemenang lomba.</h5>
        `);

        $('.answer11').css({"padding": "2%"});

        $('.arrow11').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow11').removeAttr("onclick");
        $('.container-arrow11').attr("onclick", "c11()");
    }

    const c11 = () => {
        $('.question11').css({"background-color": "transparent", "color": "#212529"});

        $('.answer11').html(``);

        $('.answer11').css({"padding": "0%"});

        $('.arrow11').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow11').removeAttr("onclick");
        $('.container-arrow11').attr("onclick", "q11()");
    }

    const q12 = () => {
        $('.question12').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer12').html(`
            <h5>Lomba MLBB dilaksanakan terlebih dahulu karena terdapat beberapa tahapan seleksi awal, 
                sehingga terdapat 4 tim yang akan maju sebagai final serta bronze match yang akan lomba secara offline.</h5>
        `);

        $('.answer12').css({"padding": "2%"});

        $('.arrow12').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow12').removeAttr("onclick");
        $('.container-arrow12').attr("onclick", "c12()");
    }

    const c12 = () => {
        $('.question12').css({"background-color": "transparent", "color": "#212529"});

        $('.answer12').html(``);

        $('.answer12').css({"padding": "0%"});

        $('.arrow12').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow12').removeAttr("onclick");
        $('.container-arrow12').attr("onclick", "q12()");
    }

    const q13 = () => {
        $('.question13').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer13').html(`
            <h5>Lomba MLBB ini dapat diikuti oleh peserta secara umum, pelajar dan mahasiswa juga dapat 
                berpartisipasi mengikuti lomba MLBB ini.</h5>
        `);

        $('.answer13').css({"padding": "2%"});

        $('.arrow13').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow13').removeAttr("onclick");
        $('.container-arrow13').attr("onclick", "c13()");
    }

    const c13 = () => {
        $('.question13').css({"background-color": "transparent", "color": "#212529"});

        $('.answer13').html(``);

        $('.answer13').css({"padding": "0%"});

        $('.arrow13').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow13').removeAttr("onclick");
        $('.container-arrow13').attr("onclick", "q13()");
    }

    const q14 = () => {
        $('.question14').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer14').html(`
            <h5>Pendaftaran dapat dilakukan melalui Website ICF 2023.</h5>
        `);

        $('.answer14').css({"padding": "2%"});

        $('.arrow14').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow14').removeAttr("onclick");
        $('.container-arrow14').attr("onclick", "c14()");
    }

    const c14 = () => {
        $('.question14').css({"background-color": "transparent", "color": "#212529"});

        $('.answer14').html(``);

        $('.answer14').css({"padding": "0%"});

        $('.arrow14').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow14').removeAttr("onclick");
        $('.container-arrow14').attr("onclick", "q14()");
    }

    const q15 = () => {
        $('.question15').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer15').html(`
            <h5>Satu tim berjumlah 5 orang, dan diperbolehkan tambahan 2 orang lagi sebagai cadangan 
                untuk player ke - 6 dan coach untuk player ke-7.</h5>
        `);

        $('.answer15').css({"padding": "2%"});

        $('.arrow15').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow15').removeAttr("onclick");
        $('.container-arrow15').attr("onclick", "c15()");
    }

    const c15 = () => {
        $('.question15').css({"background-color": "transparent", "color": "#212529"});

        $('.answer15').html(``);

        $('.answer15').css({"padding": "0%"});

        $('.arrow15').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow15').removeAttr("onclick");
        $('.container-arrow15').attr("onclick", "q15()");
    }

    const q16 = () => {
        $('.question16').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer16').html(`
            <h5>Peserta lomba MLBB akan mengikut rangkaian tahapan kompetisi mulai dari babak penyisihan, seminal dan juga final.</h5>
        `);

        $('.answer16').css({"padding": "2%"});

        $('.arrow16').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow16').removeAttr("onclick");
        $('.container-arrow16').attr("onclick", "c16()");
    }

    const c16 = () => {
        $('.question16').css({"background-color": "transparent", "color": "#212529"});

        $('.answer16').html(``);

        $('.answer16').css({"padding": "0%"});

        $('.arrow16').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow16').removeAttr("onclick");
        $('.container-arrow16').attr("onclick", "q16()");
    }

    const q17 = () => {
        $('.question17').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer17').html(`
            <h5>Terdapat total hadiah jutaan rupiah bagi pemenang lomba MLBB dan juga sertifikat pemenang.</h5>
        `);

        $('.answer17').css({"padding": "2%"});

        $('.arrow17').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow17').removeAttr("onclick");
        $('.container-arrow17').attr("onclick", "c17()");
    }

    const c17 = () => {
        $('.question17').css({"background-color": "transparent", "color": "#212529"});

        $('.answer17').html(``);

        $('.answer17').css({"padding": "0%"});

        $('.arrow17').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow17').removeAttr("onclick");
        $('.container-arrow17').attr("onclick", "q17()");
    }

    const q18 = () => {
        $('.question18').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer18').html(`
            <h5>Melakukan kecurangan dalam bentuk apapun, tidak hadir tepat waktu pada jadwal lomba yang sudah 
                ditentukan panitia, melakukan SARA dan ujaran kebencian dalam bentuk apapun, dan melanggar tata 
                tertib / peraturan lomba (tertera pada modul).</h5>
        `);

        $('.answer18').css({"padding": "2%"});

        $('.arrow18').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow18').removeAttr("onclick");
        $('.container-arrow18').attr("onclick", "c18()");
    }

    const c18 = () => {
        $('.question18').css({"background-color": "transparent", "color": "#212529"});

        $('.answer18').html(``);

        $('.answer18').css({"padding": "0%"});

        $('.arrow18').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow18').removeAttr("onclick");
        $('.container-arrow18').attr("onclick", "q18()");
    }

    const q19 = () => {
        $('.question19').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer19').html(`
            <h5>Bisa hubungi di nomor (081268981638) atas nama Riel.</h5>
        `);

        $('.answer19').css({"padding": "2%"});

        $('.arrow19').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow19').removeAttr("onclick");
        $('.container-arrow19').attr("onclick", "c19()");
    }

    const c19 = () => {
        $('.question19').css({"background-color": "transparent", "color": "#212529"});

        $('.answer19').html(``);

        $('.answer19').css({"padding": "0%"});

        $('.arrow19').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow19').removeAttr("onclick");
        $('.container-arrow19').attr("onclick", "q19()");
    }

    const q20 = () => {
        $('.question20').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer20').html(`
            <h5>SMA/SMK/MA Sederajat.</h5>
        `);

        $('.answer20').css({"padding": "2%"});

        $('.arrow20').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow20').removeAttr("onclick");
        $('.container-arrow20').attr("onclick", "c20()");
    }

    const c20 = () => {
        $('.question20').css({"background-color": "transparent", "color": "#212529"});

        $('.answer20').html(``);

        $('.answer20').css({"padding": "0%"});

        $('.arrow20').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow20').removeAttr("onclick");
        $('.container-arrow20').attr("onclick", "q20()");
    }

    const q21 = () => {
        $('.question21').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer21').html(`
            <h5>Melalui website ICF 2023 / Google Form yang ada.</h5>
        `);

        $('.answer21').css({"padding": "2%"});

        $('.arrow21').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow21').removeAttr("onclick");
        $('.container-arrow21').attr("onclick", "c21()");
    }

    const c21 = () => {
        $('.question21').css({"background-color": "transparent", "color": "#212529"});

        $('.answer21').html(``);

        $('.answer21').css({"padding": "0%"});

        $('.arrow21').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow21').removeAttr("onclick");
        $('.container-arrow21').attr("onclick", "q21()");
    }

    const q22 = () => {
        $('.question22').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer22').html(`
            <h5>Individu.</h5>
        `);

        $('.answer22').css({"padding": "2%"});

        $('.arrow22').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow22').removeAttr("onclick");
        $('.container-arrow22').attr("onclick", "c22()");
    }

    const c22 = () => {
        $('.question22').css({"background-color": "transparent", "color": "#212529"});

        $('.answer22').html(``);

        $('.answer22').css({"padding": "0%"});

        $('.arrow22').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow22').removeAttr("onclick");
        $('.container-arrow22').attr("onclick", "q22()");
    }

    const q23 = () => {
        $('.question23').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer23').html(`
            <h5>Adobe Illustrator, Adobe Photoshop, Clip Studio Paint, MediaBang Paint, Ibis Paint X, Paint Tool SAI, Corel Draw.</h5>
        `);

        $('.answer23').css({"padding": "2%"});

        $('.arrow23').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow23').removeAttr("onclick");
        $('.container-arrow23').attr("onclick", "c23()");
    }

    const c23 = () => {
        $('.question23').css({"background-color": "transparent", "color": "#212529"});

        $('.answer23').html(``);

        $('.answer23').css({"padding": "0%"});

        $('.arrow23').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow23').removeAttr("onclick");
        $('.container-arrow23').attr("onclick", "q23()");
    }

    const q24 = () => {
        $('.question24').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer24').html(`
            <h5>Laptop, Pentap, HP, Tablet.</h5>
        `);

        $('.answer24').css({"padding": "2%"});

        $('.arrow24').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow24').removeAttr("onclick");
        $('.container-arrow24').attr("onclick", "c24()");
    }

    const c24 = () => {
        $('.question24').css({"background-color": "transparent", "color": "#212529"});

        $('.answer24').html(``);

        $('.answer24').css({"padding": "0%"});

        $('.arrow24').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow24').removeAttr("onclick");
        $('.container-arrow24').attr("onclick", "q24()");
    }

    const q25 = () => {
        $('.question25').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer25').html(`
            <h5>Meja dan Stopkontak.</h5>
        `);

        $('.answer25').css({"padding": "2%"});

        $('.arrow25').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow25').removeAttr("onclick");
        $('.container-arrow25').attr("onclick", "c25()");
    }

    const c25 = () => {
        $('.question25').css({"background-color": "transparent", "color": "#212529"});

        $('.answer25').html(``);

        $('.answer25').css({"padding": "0%"});

        $('.arrow25').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow25').removeAttr("onclick");
        $('.container-arrow25').attr("onclick", "q25()");
    }

    const q26 = () => {
        $('.question26').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer26').html(`
            <h5>Lomba diadakan secara offline dan dilakukan secara digital dalam pengerjaan karyanya.</h5>
        `);

        $('.answer26').css({"padding": "2%"});

        $('.arrow26').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow26').removeAttr("onclick");
        $('.container-arrow26').attr("onclick", "c26()");
    }

    const c26 = () => {
        $('.question26').css({"background-color": "transparent", "color": "#212529"});

        $('.answer26').html(``);

        $('.answer26').css({"padding": "0%"});

        $('.arrow26').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow26').removeAttr("onclick");
        $('.container-arrow26').attr("onclick", "q26()");
    }

    const q27 = () => {
        $('.question27').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer27').html(`
            <h5>Senin (tanggal 30 Oktober 2023), untuk waktu lebih lanjut akan dikabarkan lewat group peserta kompetisi.</h5>
        `);

        $('.answer27').css({"padding": "2%"});

        $('.arrow27').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow27').removeAttr("onclick");
        $('.container-arrow27').attr("onclick", "c27()");
    }

    const c27 = () => {
        $('.question27').css({"background-color": "transparent", "color": "#212529"});

        $('.answer27').html(``);

        $('.answer27').css({"padding": "0%"});

        $('.arrow27').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow27').removeAttr("onclick");
        $('.container-arrow27').attr("onclick", "q27()");
    }

    const q28 = () => {
        $('.question28').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer28').html(`
            <h5>Bisa hubungi di nomor (0812-8909-0407) atas nama Dzakiy.</h5>
        `);

        $('.answer28').css({"padding": "2%"});

        $('.arrow28').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow28').removeAttr("onclick");
        $('.container-arrow28').attr("onclick", "c28()");
    }

    const c28 = () => {
        $('.question28').css({"background-color": "transparent", "color": "#212529"});

        $('.answer28').html(``);

        $('.answer28').css({"padding": "0%"});

        $('.arrow28').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow28').removeAttr("onclick");
        $('.container-arrow28').attr("onclick", "q28()");
    }

    const q29 = () => {
        $('.question29').css({"background-color": "#E83434", "border-radius": "8px", "color": "white"});

        $('.answer29').html(`
            <h5>Bisa menyerahkan surat keterangan siswa aktif kepada pihak sekolah.</h5>
        `);

        $('.answer29').css({"padding": "2%"});

        $('.arrow29').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaAtas.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow29').removeAttr("onclick");
        $('.container-arrow29').attr("onclick", "c29()");
    }

    const c29 = () => {
        $('.question29').css({"background-color": "transparent", "color": "#212529"});

        $('.answer29').html(``);

        $('.answer29').css({"padding": "0%"});

        $('.arrow29').html(`
            <img src="{{ asset('assets') }}/img/btnSegitigaBawah.png" style="height: 26px; width: 36px;">
        `);        

        $('.container-arrow29').removeAttr("onclick");
        $('.container-arrow29').attr("onclick", "q29()");
    }
</script>
@endsection