@extends('layouts.app')

@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    .body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #f5f8ff;
    }

    .container {
        margin: 0, 20px;
        max-width: 95%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .tab {
        max-width: 100%;
        border-radius: 15px;
        overflow: hidden;
        background: white;
    }

    .container .tab label h3 .container .tab label h2 {
        width: 40px;
        height: 40px;
        color: #333;
        z-index: 10;
        font-size: 0.7;
    }

    .container .tab label h3 {
        width: 40px;
        height: 40px;
        color: #333;
        z-index: 10;
    }

    .container .tab {
        position: relative;
        background: #fff;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.05);
        border-radius: 15px;
        overflow: hidden;
        transition: max-height 0.5s, padding 0.5s;
    }

    .container .tab .label::after {
        content: '';
        position: absolute;
        right: 20px;
        font-size: 2em;
        color: rgba(0, 0, 0, 0.1);
        color: #E83434;
        transition: transform 1s;
    }

    .acc_label,
    .content {
        padding: 14px 20px;
    }

    .acc_label {
        display: block;
        color: black;
        font-weight: 500;
        cursor: pointer;
        position: relative;
        transition: background 0.1s;
    }

    .acc_label:hover {
        background-color: #E83434;
    }

    /*.acc_label::after{
    content:"";
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 20px;
    width: 12px;
    height: 6px;
}*/
    .acc_input {
        border-width: 5px solid black;
        display: none;
    }

    .acc_input:checked~.content {
        display: block;
    }

    .container .tab input:checked~.content {
        max-height: 100vh;
    }

    .content {
        background: white;
        line-height: 1.7;
        display: none;
    }
</style>
<div class="container mb-5">
    <div class="col-12 mt-5 mb-3">
        <h1 class="m-0"><b>Frequently Asked Questions (FAQs)</b></h1>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc1" class="acc_input">
        <label for="acc1" class="acc_label">
            <h2 style="font-weight: bold;">Apa itu ICF 2023?</h2>
        </label>
        <div class="content">
            <p>ICF kepanjangan dari Informatics Creative Festival merupakan
                festival yang memamerkan hasil karya Tugas Akhir mahasiswa/i Teknik Informatika Universitas Surabaya</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc2" class="acc_input">
        <label for="acc2" class="acc_label">
            <h2 style="font-weight: bold;">Apa tema yang diangkat dalam ICF 2023 ini?</h2>
        </label>
        <div class="content">
            <p>TechUnleashed: Creativity Beyond Reality</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc3" class="acc_input">
        <label for="acc3" class="acc_label">
            <h2 style="font-weight: bold;">Apakah acara dan lomba dalam ICF 2023 ini ditarik biaya?</h2>
        </label>
        <div class="content">
            <p>Semua acara dan lomba dalam ICF 2023 dapat diikuti secara gratis</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc4" class="acc_input">
        <label for="acc4" class="acc_label">
            <h2 style="font-weight: bold;">Apa tema yang diangkat dalam ICF 2023 ini?</h2>
        </label>
        <div class="content">
            <p>TechUnleashed: Creativity Beyond Reality</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc5" class="acc_input">
        <label for="acc5" class="acc_label">
            <h2 style="font-weight: bold;">Kenapa harus ikut ICF 2023?</h2>
        </label>
        <div class="content">
            <p>Karena ICF 2023 saat ini memiliki banyak kegiatan
                lhoo seperti ada seminar teknologi, lomba nya juga seru-seru, dan banyak hadiah menarik.
                Dan kamu bisa ikut secara gratis !!</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc6" class="acc_input">
        <label for="acc6" class="acc_label">
            <h2 style="font-weight: bold;">Manfaat apa yang akan didapatkan jika mengikut ICF 2023?</h2>
        </label>
        <div class="content">
            <p>Kamu akan dapat banyak ilmu terkait Talkshow Dunia Studio Game,
                User Interface/ User Experience, dan masih banyak lagi. Selain itu kamu juga bisa seru-seruan dengan
                ikut berbagai lomba-lomba yang tersedia seperti
                Mobile Legends: Bang Bang Competition dan juga Asset Game Character Design!!</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc7" class="acc_input">
        <label for="acc7" class="acc_label">
            <h2 style="font-weight: bold;">Kapan batas akhir pendaftaran kegiatan ICF 2023?</h2>
        </label>
        <div class="content">
            <p>Untuk seminar, pendaftaran terakhir tanggal 2 November 2023 pada
                pukul 23:59 Waktu Indonesia Barat (WIB).</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc8" class="acc_input">
        <label for="acc8" class="acc_label">
            <h2 style="font-weight: bold;">Siapa saja yang dapat berpartisipasi?</h2>
        </label>
        <div class="content">
            <p>Semua kegiatan di ICF 2023 dapat diikuti oleh peserta secara umum serta gratis !!</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc9" class="acc_input">
        <label for="acc9" class="acc_label">
            <h2 style="font-weight: bold;">Kapan dan dimana acara seminar ICF 2023 akan berlangsung?</h2>
        </label>
        <div class="content">
            <p>ICF 2023 akan dilaksanakan di Ciputra World Lantai 3, Surabaya.
                Dari tanggal 3-5 November 2023.</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc10" class="acc_input">
        <label for="acc10" class="acc_label">
            <h2 style="font-weight: bold;">Apakah saya akan mendapatkan sertifikat sebagai peserta?</h2>
        </label>
        <div class="content">
            <p>Setiap peserta lomba dan seminar akan
                mendapatkan sertifikat peserta maupun sertifikat pemenang bagi pemenang lomba</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc11" class="acc_input">
        <label for="acc11" class="acc_label">
            <h2 style="font-weight: bold;">Kenapa lomba MLBB dilaksanakan terlebih dahulu di tanggal 26 Oktober?</h2>
        </label>
        <div class="content">
            <p>Lomba MLBB dilaksanakan terlebih dahulu
                karena terdapat beberapa tahapan seleksi awal, sehingga terdapat 4 tim yang akan maju
                sebagai final serta bronze match yang akan lomba secara offline.</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc12" class="acc_input">
        <label for="acc12" class="acc_label">
            <h2 style="font-weight: bold;">Siapa saja yang dapat berpartisipasi dalam lomba MLBB?</h2>
        </label>
        <div class="content">
            <p>Lomba MLBB ini dapat diikuti oleh peserta secara umum,
                pelajar dan mahasiswa juga dapat berpartisipasi mengikuti lomba MLBB ini</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc13" class="acc_input">
        <label for="acc13" class="acc_label">
            <h2 style="font-weight: bold;">Bagaimana cara mendaftar lomba MLBB?</h2>
        </label>
        <div class="content">
            <p>Pendaftaran dapat dilakukan melalui Website ICF 2023</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc14" class="acc_input">
        <label for="acc14" class="acc_label">
            <h2 style="font-weight: bold;">Berapa jumlah orang dalam satu tim?</h2>
        </label>
        <div class="content">
            <p>Satu tim berjumlah 5 orang, dan diperbolehkan
                tambahan 2 orang lagi sebagai cadangan untuk player ke - 6 dan coach untuk player ke-7.</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc15" class="acc_input">
        <label for="acc15" class="acc_label">
            <h2 style="font-weight: bold;">Bagaimana tahapan kompetisi lomba MLBB?</h2>
        </label>
        <div class="content">
            <p>Peserta lomba MLBB akan mengikut rangkaian tahapan
                kompetisi mulai dari babak penyisihan, seminal dan juga final.</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc16" class="acc_input">
        <label for="acc16" class="acc_label">
            <h2 style="font-weight: bold;">Seperti apa hadiah bagi pemenang lomba MLBB?</h2>
        </label>
        <div class="content">
            <p>Terdapat total hadiah jutaan rupiah bagi pemenang lomba MLBB dan juga sertifikat pemenang</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc17" class="acc_input">
        <label for="acc17" class="acc_label">
            <h2 style="font-weight: bold;">Apa saja hal yang dapat membuat peserta didiskualifikasi?</h2>
        </label>
        <div class="content">
            <p>Melakukan kecurangan dalam bentuk apapun, tidak hadir tepat
                waktu pada jadwal lomba yang sudah ditentukan panitia, melakukan SARA dan ujaran
                kebencian dalam bentuk apapun, dan melanggar tata tertib/ peraturan lomba (tertera pada modul).</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc18" class="acc_input">
        <label for="acc18" class="acc_label">
            <h2 style="font-weight: bold;">Siapa yang dapat saya hubungi jika masih memiliki pertanyaan?</h2>
        </label>
        <div class="content">
            <p>Bisa hubungi di nomor (081268981638) atas nama Riel</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc19" class="acc_input">
        <label for="acc19" class="acc_label">
            <h2 style="font-weight: bold;">Siapa saja yang dapat berpartisipasi dalam lomba Asset Game Character Design?
            </h2>
        </label>
        <div class="content">
            <p>SMA/SMK/MA Sederajat</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc20" class="acc_input">
        <label for="acc20" class="acc_label">
            <h2 style="font-weight: bold;">Bagaimana cara mendaftar lomba Asset Game Character Design?</h2>
        </label>
        <div class="content">
            <p>Pendaftaran dapat dilakukan melalui Website ICF 2023</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc21" class="acc_input">
        <label for="acc21" class="acc_label">
            <h2 style="font-weight: bold;"> Lomba Asset Game Character Design bersifat tim / individu ?</h2>
        </label>
        <div class="content">
            <p>Individu</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc22" class="acc_input">
        <label for="acc22" class="acc_label">
            <h2 style="font-weight: bold;">Software apa yang diperbolehkan dalam kompetisi Asset Game Character Design?
            </h2>
        </label>
        <div class="content">
            <p>Adobe Illustator, Adobe Photoshop, Clip studio paint, MediaBang Paint, dan Ibis Paint</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc23" class="acc_input">
        <label for="acc23" class="acc_label">
            <h2 style="font-weight: bold;">Hardware apa yang diperbolehkan dalam kompetisi Asset Game Character Design?
            </h2>
        </label>
        <div class="content">
            <p>Laptop, Pentap, HP , dan Tablet</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc24" class="acc_input">
        <label for="acc24" class="acc_label">
            <h2 style="font-weight: bold;">Peralatan apa aja yang disediakan panitia untuk lomba Asset Game Character
                Design?</h2>
        </label>
        <div class="content">
            <p>Meja dan Stopkontak</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc25" class="acc_input">
        <label for="acc25" class="acc_label">
            <h2 style="font-weight: bold;"> Bagaimana metode kompetisi lomba Asset Game Character Design?</h2>
        </label>
        <div class="content">
            <p>Lomba diadakan secara offline dan dilakukan metode secara digital.</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc26" class="acc_input">
        <label for="acc26" class="acc_label">
            <h2 style="font-weight: bold;"> Kapan technical Meeting lomba Asset Game Character Design?</h2>
        </label>
        <div class="content">
            <p>Senin (tanggal 30 Oktober 2023),
                untuk waktu lebih lanjut akan dikabarkan lewat group peserta kompetisi.</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc27" class="acc_input">
        <label for="acc27" class="acc_label">
            <h2 style="font-weight: bold;">Siapa yang saya dapat hubungi jika masih memiliki pertanyaan?</h2>
        </label>
        <div class="content">
            <p>Bisa hubungi di nomor (0812-8909-0407) atas nama Dzakiy</p>
        </div>
    </div>
    <div class="tab">
        <input type="radio" name="acc" id="acc28" class="acc_input">
        <label for="acc28" class="acc_label">
            <h2 style="font-weight: bold;">Bagaimana jika saya tidak mempunyai KTP (kartu tanda pelajar) ?</h2>
        </label>
        <div class="content">
            <p>Bisa menyerahkan surat keterangan siswa aktif kepada pihak sekolah.</p>
        </div>
    </div>
</div>
@endsection