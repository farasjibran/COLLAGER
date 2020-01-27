@extends('layouts.dashboard')

@section('content')
<br><br>
<div class="col backbttn">
    <img src="{{ asset('img/Group 55.png')}}" alt="">
    <div class="textkampus">
        <div class="judulkampus">
            <p><b>Kampus Unggulan</b></p>
        </div>
    </div>
</div>
<br>
<div class="row kampus">
    <div class="campus1">
        <div class="row" style="margin-left: 40px">
            <img src="{{ asset('img/Group 22.jpg')}}" alt="">

            <!-- @foreach($kampus as $kmps)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$kmps->nama_campus}}</h5>
                    <p class="card-text">{{$kmps->informasi}}</p>
                    <div class="btnui">
                        <a href="{{ route('detail', $kmps->id) }}"><button type="button" class="btn btn-danger">Detail</button></a>
                    </div>
                </div>
            </div>
            @endforeach -->
        </div>
    </div>
</div>
@endsection