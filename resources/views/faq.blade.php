@extends('layouts.app')

@section('content')
<style>
*   
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #f5f8ff;
}
.container
{
    /* margin: 0 40px; */
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.container h1
{
    color: #333;
}
.container .tab
{
    position: relative;
    background: #fff;
    padding: 0 20px 20px;
    /* box-shadow: 0 15px 25px rgba(0,0,0,0.05); */
    border: 1px solid gray;
    border-radius: 20px;
    overflow: hidden;
}
.container .tab input
{
    appearance: none;
}
.container .tab label
{
    display: flex;
    align-items: center;
    cursor: pointer;
}
.container .tab label::after
{
    content: '^';
    position: absolute;
    right: 20px;
    font-size: 2em;
    color: #E83434;
    transition: transform 1s;
}
/* .container .tab:hover label::after
{
    color: #333;
} */
/* .container .tab input:checked ~ label::after
{
    transform: rotate(180deg);
} */
.container .tab label h2
{
    font-size: 1.25em;
}
.container .tab .content 
{
    max-height: 0;
    transition: 1s;
    overflow: hidden;
}
.container .tab input:checked ~ .content
{
    max-height: 100vh;
}
.container .tab .content p
{
    position: relative;
    padding: 10px 0;
    color: #333;
    z-index: 10;
}
</style>
    <div class="container mb-5">
        <div class="col-12 m-0 mt-5">
            <h1 class="m-0"><b>Frequently Asked Questions (FAQs)</b></h1>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1">
                 <h2 style="font-weight: bold;">Apa itu ICF 2023?</h2>
            </label>
            <div class="content"> <p>ICF kepanjangan dari Informatics Creative Festival merupakan 
                festival yang memamerkan hasil karya Tugas Akhir mahasiswa/i Teknik Informatika Universitas Surabaya</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                 <h2 style="font-weight: bold;">Apa tema yang diangkat dalam ICF 2023 ini?</h2>
            </label>
            <div class="content"> <p>TechUnleashed: Creativity Beyond Reality</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                 <h2 style="font-weight: bold;">Apakah acara dan lomba dalam ICF 2023 ini ditarik biaya?</h2>
            </label>
            <div class="content"> <p>Semua acara dan lomba dalam ICF 2023 dapat diikuti secara gratis</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                 <h2 style="font-weight: bold;">Apa tema yang diangkat dalam ICF 2023 ini?</h2>
            </label>
            <div class="content"> <p>TechUnleashed: Creativity Beyond Reality</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc5">
            <label for="acc5">
                 <h2 style="font-weight: bold;">Kenapa harus ikut ICF 2023?</h2>
            </label>
            <div class="content"> <p>Karena ICF 2023 saat ini memiliki banyak kegiatan 
                lhoo seperti ada seminar teknologi, lomba nya juga seru-seru, dan banyak hadiah menarik.
                 Dan kamu bisa ikut secara gratis !!</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc6">
            <label for="acc6">
                 <h2 style="font-weight: bold;">Manfaat apa yang akan didapatkan jika mengikut ICF 2023?</h2>
            </label>
            <div class="content"> <p>Kamu akan dapat banyak ilmu terkait Talkshow Dunia Studio Game, 
                User Interface/ User Experience, dan masih banyak lagi. Selain itu kamu juga bisa seru-seruan dengan 
                ikut berbagai lomba-lomba yang tersedia seperti 
                Mobile Legends: Bang Bang Competition dan juga Asset Game Character Design!!</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc7">
            <label for="acc7">
                 <h2 style="font-weight: bold;">Kapan batas akhir pendaftaran kegiatan ICF 2023?</h2>
            </label>
            <div class="content"> <p>Untuk seminar, pendaftaran terakhir tanggal 2 November 2023 pada 
                pukul 23:59 Waktu Indonesia Barat (WIB).</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc8">
            <label for="acc8">
                 <h2 style="font-weight: bold;">Siapa saja yang dapat berpartisipasi?</h2>
            </label>
            <div class="content"> <p>Semua kegiatan di ICF 2023 dapat diikuti oleh peserta secara umum serta gratis !!</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc9">
            <label for="acc9">
                 <h2 style="font-weight: bold;">Kapan dan dimana acara seminar ICF 2023 akan berlangsung?</h2>
            </label>
            <div class="content"> <p>ICF 2023 akan dilaksanakan di Ciputra World Lantai 3, Surabaya. 
                Dari tanggal 3-5 November 2023.</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc10">
            <label for="acc10">
                 <h2 style="font-weight: bold;">Apakah saya akan mendapatkan sertifikat sebagai peserta?</h2>
            </label>
            <div class="content"> <p>Setiap peserta lomba dan seminar akan 
                mendapatkan sertifikat peserta maupun sertifikat pemenang bagi pemenang lomba</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc11">
            <label for="acc11">
                 <h2 style="font-weight: bold;">Kenapa lomba MLBB dilaksanakan terlebih dahulu di tanggal 26 Oktober?</h2>
            </label>
            <div class="content"> <p>Lomba MLBB dilaksanakan terlebih dahulu 
                karena terdapat beberapa tahapan seleksi awal, sehingga terdapat 4 tim yang akan maju 
                sebagai final serta bronze match yang akan lomba secara offline.</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc12">
            <label for="acc12">
                 <h2 style="font-weight: bold;">Siapa saja yang dapat berpartisipasi dalam lomba MLBB?</h2>
            </label>
            <div class="content"> <p>Lomba MLBB ini dapat diikuti oleh peserta secara umum, 
                pelajar dan mahasiswa juga dapat berpartisipasi mengikuti lomba MLBB ini</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc13">
            <label for="acc13">
                 <h2 style="font-weight: bold;">Bagaimana cara mendaftar lomba MLBB?</h2>
            </label>
            <div class="content"> <p>Pendaftaran dapat dilakukan melalui Website ICF 2023</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc14">
            <label for="acc14">
                 <h2 style="font-weight: bold;">Berapa jumlah orang dalam satu tim?</h2>
            </label>
            <div class="content"> <p>Satu tim berjumlah 5 orang, dan diperbolehkan 
                tambahan 2 orang lagi sebagai cadangan untuk player ke - 6 dan coach untuk player ke-7.</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc15">
            <label for="acc15">
                 <h2 style="font-weight: bold;">Bagaimana tahapan kompetisi lomba MLBB?</h2>
            </label>
            <div class="content"> <p>Peserta lomba MLBB akan mengikut rangkaian tahapan 
                kompetisi mulai dari babak penyisihan, seminal dan juga final.</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc16">
            <label for="acc16">
                 <h2 style="font-weight: bold;">Seperti apa hadiah bagi pemenang lomba MLBB?</h2>
            </label>
            <div class="content"> <p>Terdapat total hadiah jutaan rupiah bagi pemenang lomba MLBB dan juga sertifikat pemenang</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc17">
            <label for="acc17">
                 <h2 style="font-weight: bold;">Apa saja hal yang dapat membuat peserta didiskualifikasi?</h2>
            </label>
            <div class="content"> <p>Melakukan kecurangan dalam bentuk apapun, tidak hadir tepat 
                waktu pada jadwal lomba yang sudah ditentukan panitia, melakukan SARA dan ujaran
                 kebencian dalam bentuk apapun, dan melanggar tata tertib/ peraturan lomba (tertera pada modul).</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc18">
            <label for="acc18">
                 <h2 style="font-weight: bold;">Siapa yang dapat saya hubungi jika masih memiliki pertanyaan?</h2>
            </label>
            <div class="content"> <p>Bisa hubungi di nomor  (081268981638) atas nama Riel</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc19">
            <label for="acc19">
                 <h2 style="font-weight: bold;">Siapa saja yang dapat berpartisipasi dalam lomba Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>SMA/SMK/MA Sederajat</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc20">
            <label for="acc20">
                 <h2 style="font-weight: bold;">Bagaimana cara mendaftar lomba Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>Pendaftaran dapat dilakukan melalui Website ICF 2023</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc21">
            <label for="acc21">
                 <h2 style="font-weight: bold;"> Lomba Asset Game Character Design bersifat tim / individu ?</h2>
            </label>
            <div class="content"> <p>Individu</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc22">
            <label for="acc22">
                 <h2 style="font-weight: bold;">Software apa yang diperbolehkan dalam kompetisi Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>Adobe Illustator, Adobe Photoshop, Clip studio paint, MediaBang Paint, dan Ibis Paint</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc23">
            <label for="acc23">
                 <h2 style="font-weight: bold;">Hardware apa yang diperbolehkan dalam kompetisi Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>Laptop, Pentap, HP , dan Tablet</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc24">
            <label for="acc24">
                 <h2 style="font-weight: bold;">Peralatan apa aja yang disediakan panitia untuk lomba Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>Meja dan Stopkontak</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc25">
            <label for="acc25">
                 <h2 style="font-weight: bold;"> Bagaimana metode kompetisi lomba Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>Lomba diadakan secara offline dan dilakukan metode secara digital.</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc26">
            <label for="acc26">
                 <h2 style="font-weight: bold;"> Kapan technical Meeting lomba Asset Game Character Design?</h2>
            </label>
            <div class="content"> <p>Senin (tanggal 30 Oktober 2023), 
                untuk waktu lebih lanjut akan dikabarkan lewat group peserta kompetisi.</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc27">
            <label for="acc27">
                 <h2 style="font-weight: bold;">Siapa yang saya dapat hubungi jika masih memiliki pertanyaan?</h2>
            </label>
            <div class="content"> <p>Bisa hubungi di nomor  (0812-8909-0407) atas nama Dzakiy</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc28">
            <label for="acc28">
                 <h2 style="font-weight: bold;">Bagaimana jika saya tidak mempunyai KTP (kartu tanda pelajar) ?</h2>
            </label>
            <div class="content"> <p>Bisa menyerahkan surat keterangan siswa aktif kepada pihak sekolah.</p> 
            </div>
        </div>
    </div>
@endsection