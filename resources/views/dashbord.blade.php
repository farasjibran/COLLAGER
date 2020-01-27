@extends('layouts.dashboard')

@section('content')

<div class="row bungkusdash">
    <div class="card dashboardmenu" style="width: 15rem;">
        <div class="textdashboard">
            <p><b>Dashboard</b></p>
        </div>
        <div class="dashboardtext" id="board">
            <div class="row menutext">
                <a href="#" class="hoverlink active">Welcome</a>
            </div>
            <div class="row menutext">
                <a href="{{ route('kepribadian')}}" class="hoverlink" data-toggle="modal" data-target="#modul1">Kepribadian</a>
            </div>
            <div class="row menutext">
                <a href="#" class="hoverlink isDisabled">Minat</a>
            </div>
            <div class="row menutext">
                <a href="#" class="hoverlink isDisabled">Kemampuan</a>
            </div>
            <div class="row menutext">
                <a href="#" class="hoverlink isDisabled">Hasil</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="dashwelcome">
            <img src="{{ asset('img/Group 48.jpg')}}" class="card-img-top" alt="...">
            <div class="headerdash">
                <p>Selamat Datang di <span><b style="color: #E44C4C">COLLAGER !</b></span></p>
                <p>Disini <span><b style="color: #E44C4C">COLLAGER</b></span> akan membantumu dalam menemukan jurusan yang <span><br>sesuai dengan minat dan bakatmu melalui setiap assesment yang <span><br>telah kamu jawab. ayo semangat!</span></span></p>
            </div>
        </div>

        <div class="row menudashboard">
            <div class="col">
                <div class="modul1" style="width: 13rem;">
                    <a href="{{ route('kepribadian')}}" data-toggle="modal" data-target="#modul1"><img src="{{ asset('img/Group 50.jpg')}}" class="card-img-top" alt="..."></a>
                </div>
                <div class="judulmodul1">
                    <p><b>Kepribadian</b></p>
                </div>
            </div>

            <div class="col">
                <div class="modul2" style="width: 13rem;">
                    <a href="#"><img src="{{ asset('img/Group 51.jpg')}}" class="card-img-top" alt="..."></a>
                </div>
                <div class="judulmodul2">
                    <p><b>Minat</b></p>
                </div>
            </div>

            <div class="col">
                <div class="modul3" style="width: 13rem;">
                    <a href="#"><img src="{{ asset('img/Group 52.jpg')}}" class="card-img-top" alt="..."></a>
                </div>
                <div class="judulmodul3">
                    <p><b>Kemampuan</b></p>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection