@extends('layouts.dashboard')

@section('content')

<!-- content -->
<div class="row bungkuscontn">
    <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide contentt" data-ride="carousel">
            <div class="carousel-inner itemimg">
                <!-- carousel item 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('img/Group 49.jpg')}}" class="d-block w-100" alt="...">
                    <div class="data1">
                        <p>Persiapkan kuliah mu tanpa ribet hanya di <b style="color: #E44C4C;">COLLAGER</b></p>
                    </div>
                    <div class="btnmulai">
                        <a href="{{ route('dashbord')}}"><button type="button" class="btn btn-danger">Mulai</button></a>
                    </div>
                </div>

                <!-- carousel item 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/Group 49.jpg')}}" class="d-block w-100" alt="...">
                </div>

                <!-- carousel item 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/Group 49.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <!-- indikator carousel -->
            <div class="indikator">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="col">

        <div class="row headkampus">
            <div class="col-md-4">
                <div class="headkampus">
                    <p>Kampus Unggulan</p>
                </div>
            </div>
            <div class="col-md-4" style="margin-left: -190px">
                <hr style="width: 80px; border: 1px solid black">
            </div>
            <div class="col-md-4" style="margin-left: -60px; margin-top: 5px">
                <!-- <a href="{{ route('kampus')}}" style="color: #E44C4C;">Lihat Selengkapnya >></a> -->
            </div>
        </div>

        <!-- kampus1 -->
        <div class="kampusmenu">
            <img src="{{ asset('img/ui.png')}}" class="card-img-top" alt="...">
        </div>

        <!-- kampus2 -->
        <div class="kampusmenu">
            <img src="{{ asset('img/ugm.png')}}" class="card-img-top" alt="...">
            <h1></h1>
        </div>

        <!-- kampus3 -->
        <div class="kampusmenu">
            <img src="{{ asset('img/ui.png')}}" class="card-img-top" alt="...">
        </div>
    </div>
</div>

<!-- kumpulan fitur -->
<div class="fitur">
    <div class="text-center">
        <p style="font-size: 15px;">
            <b style="color: #E44C4C;">#Wujudkan</b>
            <b>rencana kuliahmu di</b>
            <b style="color: #E44C4C">COLLAGER</b>
        </p>
    </div>

    <div class="row">

        <!-- fitur1 -->
        <div class="col text-center">
            <div>
                <img src="{{ asset('img/reading.png')}}" alt="...">
                <p>Cari tau <b style="color: #E44C4C;">minat, bakat,<br>serta potensi dirimu</b></p>
            </div>
        </div>

        <!-- fitur2 -->
        <div class="col text-center">
            <div>
                <img src="{{ asset('img/recommend.png')}}" alt="...">
                <p style="margin-top: 5px"><b style="color: #E44C4C">Rekomendasi</b> jurusan <br> kuliah yang sesuai dengan <b style="color: #E44C4C"> <br> minat serta bakat</b></p>
            </div>
        </div>

        <!-- fitur3 -->
        <div class="col text-center">
            <div>
                <img src="{{ asset('img/teamwork.png')}}" alt="...">
                <p style="margin-top: 13px">Ayo diskusikan
                    pilihan <br> <b style="color: #E44C4C">jurusanmu</b> dengan para lulusan yang telah <b style="color: #E44C4C">sukses</b></p>
            </div>
        </div>
    </div>
</div>




@endsection