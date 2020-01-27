@extends('layouts.dashboard')
@section('content')

<div class="gambar">
    <img src="" class="d-block w-100" alt="...">
    <div class="data1">
        <p>{{$detail->gambar}}</p>
    </div>
</div>
<br>
<div class="info">
    <h2>Informasi Kampus</h2>
</div>
<div class="row semua">
    <div class="card text-white bg-danger mb-3" style="max-width: 15rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>

    <div class="card text-white bg-info mb-3" style="max-width: 15rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>

    <div class="card text-white bg-success mb-3" style="max-width: 15rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
    </div>
</div>
<div class="keunggulan">
    <h2>keunggulan kampus</h2>
</div>

<div class="row semua">

    <div class="card" style="width: 15rem;">
        <img src="{{ asset('img/Group 48.jpg')}}" class="d-block w-100" alt="...">
        <div class="unggul1">
            <p>biaya kuliah murah</p>
        </div>
        <div class="textt">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum fugiat tempora
                illo inventore voluptatum excepturi rerum tenetur accusamus consequuntur nobis
                sunt, sed consectetur vel ex doloremque! Id, fugiat. Eum, qui.</p>
        </div>
    </div>

    <div class="card" style="width: 15rem;">
        <img src="{{ asset('img/Group 48.jpg')}}" class="d-block w-100" alt="...">
        <div class="unggul1">
            <p>biaya kuliah murah</p>
        </div>
        <div class="textt">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum fugiat tempora
                illo inventore voluptatum excepturi rerum tenetur accusamus consequuntur nobis
                sunt, sed consectetur vel ex doloremque! Id, fugiat. Eum, qui.</p>
        </div>
    </div>

    <div class="card" style="width: 15rem;">
        <img src="{{ asset('img/Group 48.jpg')}}" class="d-block w-100" alt="...">
        <div class="unggul1">
            <p>biaya kuliah murah</p>
        </div>
        <div class="textt">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum fugiat tempora
                illo inventore voluptatum excepturi rerum tenetur accusamus consequuntur nobis
                sunt, sed consectetur vel ex doloremque! Id, fugiat. Eum, qui.</p>
        </div>
    </div>

</div>
@endsection
