@extends('layouts.index')
@section('title')
    Show Product
@endsection
@section('content')
    <div class="container mb-4 product">
        <h2 class="m-4">Semua Kategori</h2>
        <div class="bag1 row d-flex justify-content-around">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @foreach ($kategori as $k)
                <div class="card col-lg-3 m-2 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <h4><li>{{$k->nama}}</li></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
