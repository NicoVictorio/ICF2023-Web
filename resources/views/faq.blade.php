@extends('layouts.app')
@section('content')
<style type="text/css">
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
    margin: 0 40px;
    max-width: 600px;
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
    box-shadow: 0 15px 25px rgba(0,0,0,0.05);
    border-radius: 5px;
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
    content: '%';
    position: absolute;
    right: 20px;
    font-size: 2em;
    color: rgba(0,0,0,0.1);
    transition: transform 1s;
}
.container .tab:hover label::after
{
    color: #333;
}
.container .tab input:checked ~ label::after
{
    transform: rotate(180deg);
}
.container .tab label h3
{
    width: 40px;
    height: 40px;
    color: #333;
    z-index: 10;
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
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <div class="tab">
            <input type="radio" name="acc" id="acc1">
            <label for="acc1">
                 <h3>Apa itu ICF 2023?</h3>
            </label>
            <div class="content"> <p>ICF kepanjangan dari Informatics Creative Festival merupakan 
                festival yang memamerkan hasil karya Tugas Akhir mahasiswa/i Teknik Informatika Universitas Surabaya</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc2">
            <label for="acc2">
                 <h3>Apa tema yang diangkat dalam ICF 2023 ini?</h3>
            </label>
            <div class="content"> <p>TechUnleashed: Creativity Beyond Reality</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc3">
            <label for="acc3">
                 <h3>Apakah acara dan lomba dalam ICF 2023 ini ditarik biaya?</h3>
            </label>
            <div class="content"> <p>Semua acara dan lomba dalam ICF 2023 dapat diikuti secara gratis</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc4">
            <label for="acc4">
                 <h3>Apa tema yang diangkat dalam ICF 2023 ini?</h3>
            </label>
            <div class="content"> <p>TechUnleashed: Creativity Beyond Reality</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc5">
            <label for="acc5">
                 <h3>Kenapa harus ikut ICF 2023?</h3>
            </label>
            <div class="content"> <p>Karena ICF 2023 saat ini memiliki banyak kegiatan 
                lhoo seperti ada seminar teknologi, lomba nya juga seru-seru, dan banyak hadiah menarik.
                 Dan kamu bisa ikut secara gratis !!</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc6">
            <label for="acc6">
                 <h3>Manfaat apa yang akan didapatkan jika mengikut ICF 2023?</h3>
            </label>
            <div class="content"> <p>Kamu akan dapat banyak ilmu terkait Talkshow Dunia Studio Game, User Interface/ User Experience, dan masih banyak lagi. Selain itu kamu juga bisa seru-seruan dengan 
                ikut berbagai lomba-lomba yang tersedia seperti 
                Mobile Legends: Bang Bang Competition dan juga Asset Game Character Design!!</p> 
            </div>
        </div>
        <div class="tab">
            <input type="radio" name="acc" id="acc7">
            <label for="acc7">
                 <h3>Bagaimana cara saya mendaftar untuk kegiatan ICF 2023 ini?</h3>
            </label>
            <div class="content"> <p>Untuk pendaftaran kamu bisa melihat video tutorial youtube ini:  </p> 
            </div>
        </div>
    </div>
@endsection