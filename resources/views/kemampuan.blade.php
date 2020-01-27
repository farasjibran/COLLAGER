@extends('layouts.modul3')

@section('content')
<br><br>
<div class="container-fluid blok">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post">
                1. Apakah anda merasa berarti saat orang lain menghargai perasaan anda?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                2. Apakah anda Berbicara dengan sedikit orang, yang telah dikenal?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                3. Apakah anda menganggap seorang pengkhayal orang yang mengganggu?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                4. Apakah anda merasa nyaman dengan berbagai pilihan?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                5. Apakah anda lebih menikmati melakukan lebih dari satu pekerjaan dalam satu waktu?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                6. Apakah anda Memberikan kebebasan dan fleksibel asalkan tujuan tercapai?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                7. Apakah anda Memilih mengikuti buku pedoman?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                8. Apakah anda Bertindak sesuai situasi dan kondisi yang terjadi?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                9. Apakah anda menikmati sebuah hubungan dengan banyak orang dan sambil lalu?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                10. Apakah anda Menunggu di sapa terlebih dahulu oleh teman?
                <br>
                <input type="radio" value="1" name="pilihan">Ya
                <br>
                <input type="radio" value="2" name="pilihan">Tidak
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('hasil') }}" class="btn btn-danger inibtn"> Submit </a>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </form>
        </div>
    </div>
    @endsection