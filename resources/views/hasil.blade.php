@extends('layouts.hasil')
@section('content')
<br><br><br>
<div class="row" style="margin-left: -5%">
    <div class="col-md-5">
        <div class="gambar">
            <img src="{{ asset('img/Group 56.jpg') }}" class="d-block w-100" alt="...">
            <div class="textjudulhasil">
                <p style="font-size: 60px; color: white"><b>UNIVERSITAS <span style="color: #FF7575"><br>SINGAPERBANGSA</span></b></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col informasikmps">
        <p>Informasi Kampus</p>
    </div>
    <div class="col-md-4" style="margin-left: -63%; margin-top: 20%">
        <hr style="width: 600px; border: 1px solid black">
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4 infrmasi1">
        <div class="card text-center text-white bg-danger mb-3" style="max-width: 15rem;">
            <div class="card-header">Review kampus</div>
            <div class="card-body">
                <p class="card-text">Rating : 5/5</p>
                <br>
                <p class="card-text">Viewer : 3889 views</p>
                <p class="card-text">Like : 500 likes</p>
                <p class="card-text">Akreditasi : A</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 infrmasi2">
        <div class="card text-center text-white bg-info mb-3" style="max-width: 15rem;">
            <div class="card-header">Tentang kampus</div>
            <div class="card-body">
                <p class="card-text"><b>8</b></p>
                <p class="card-text">Fakultas</p>
                <br>
                <p class="card-text"><b>30</b></p>
                <p class="card-text">Program Studi</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 infrmasi3">
        <div class="card text-center text-white bg-success mb-3" style="max-width: 15rem;">
            <div class="card-header">Jumlah Dosen Dan Mahaiswa</div>
            <div class="card-body">
                <p class="card-title"><b>480</b></p>
                <p class="card-text">Dosen</p>
                <br>
                <p class="card-text"><b>16.580</b></p>
                <p class="card-text">Mahasiswa</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4" style="margin-left: 12.5%; margin-top: 3.5%">
        <hr style="width: 600px; border: 1px solid black">
    </div>
    <div class="col-md-4 keunggulan">
        <p>Keunggulan Kampus</p>
    </div>
</div>
<div class="row">
    
</div>
@endsection