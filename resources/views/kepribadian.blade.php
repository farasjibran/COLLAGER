@extends('layouts.modul1')

@section('content')
<br><br>
<div class="container-fluid blok">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                1. Apakah anda Sebagian besar teman menganggap anda terlalu memihak?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                2. Apakah anda akan mengingatkan teman jika dia bertindak tidak rasional?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                3. Apakah anda mementingkan hal paling penting adalah tercapainya target dan tujuan hidup?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                4. Apakah anda bersemangat dalam menemukan solusi, memberi saran dan mengungkapkan ide?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                5. Apakah anda selalu Menjadikan pengalaman sebagai petunjuk?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                6. Apakah anda Mencari solusi dengan merenungkan seorang diri?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                7. Apakah anda lebih berfokus pada apa yang dapat diperbaiki saat ini?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                8. Apakah anda lebih senang Duduk bersama-sama dengan orang lain?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                9. Apakah anda menjalin hubungan dijalin dan dirawat dengan komunikasi dan diskusi?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                10. Apakah anda Ketika berdikusi sangat penting memperhatikan perasaan orang lain?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                <br>
            </form>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{ route('minat')}}" class="btn btn-danger inibtn"> Next </a>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
    @endsection