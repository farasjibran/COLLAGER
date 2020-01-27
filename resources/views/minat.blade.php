@extends('layouts.modul2')

@section('content')
<br><br>
<div class="container-fluid blok">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                1. Apakah anda suka mempunyai teman yang kepribadian hangat?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                2. Apakah anda bosan beraktifitas sendirian?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                3. Apakah anda menemukan ide dan mengembangkanya dengan sendirian?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                4. Apakah anda lebih cenderung berhati-hati?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                5. Apakah anda Banyak bicara dan membuka topik pembicaraan dengan orang baru?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                6. Apakah anda Senang mengikuti petunjuk yang ada?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                7. Apakah anda Variasi dan fleksibilitas menjadi alasan bersemangat dalam mengerjakan sesuatu?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                8. Apakah teman anda menganggapku orang yang blak-blakan, cerewet dan logis?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                9. Apakah anda Mengumpulkan informasi melalui pengamatanku atas kenyataan?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                10. Apakah anda lebih cenderung sedikit pendiam?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                <br>
            </form>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{ route('kemampuan')}}" class="btn btn-danger inibtn"> Next </a>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>
    @endsection