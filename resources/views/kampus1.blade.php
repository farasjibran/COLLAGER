@extends('layouts.dashboard')
@section('content')

<span class="shadow-sm p-3 badge badge-white">Kampus Unggulan</span>
<div class="row kampus">
    <div class="campus1">
        <div class="row">
            @foreach($kampus as $kmps)
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$kmps->nama_campus}}</h5>
                            <p class="card-text">{{$kmps->informasi}}</p>
                                <div class="btnui">
                                    <a href="/detail/{{$kmps->id}}"><button type="button"class="btn btn-danger">Detail</button></a>
                                </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
