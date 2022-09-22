@extends('layouts.index')
@section('title')
    Dashboard
@endsection
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" style="height: 50%" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 50%">
            <div class="carousel-item active">
                <img src="{{ asset('Image/pict1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Image/pict1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Image/pict1.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending mb-4 mt-4" id="trending">
        <h2 class="m-4">Trending Styles</h2>
        <div class="bag1 row d-flex justify-content-around">
            @foreach ($trending as $t)
                <div class="card col-lg-3 m-2" style="width: 18rem;">
                    <img src="{{ Storage::url($t->gambar) }}"class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-text">{{ $t->nama_product }} ({{$t->Kategori->nama}})</p>
                        </b>
                        <p class="card-text">{{ $t->deskripsi_product }}</p>
                        <p class="terjual">Terjual : {{ $t->terjual }}</p>
                        <p class="stok">Stok : {{ $t->stok_product }}</p>
                        <b>
                            <h5 class="harga">Rp.{{ number_format($t->harga_product, 2) }}</h5>
                        </b>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="sp1 m-3 shadow-lg">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('Image/product3.jpg') }}" class="img_sp" alt="" srcset="">
            </div>
            <div class="col-lg-6">
                <div class="text-sp1">
                    <p>Best Ever <br> Made Better</p>
                    <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet temporibus dolore magnam dolor
                        modi nisi quae reprehenderit, ab debitis quaerat.</h6>
                    <button class="button_black">SHOP NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div class="Pria mb-4" id="pria">
        <h2 class="m-4">Pria Styles</h2>
        <div class="bag1 row d-flex justify-content-around">
            @foreach ($pria as $p)
                <div class="card col-lg-3 m-2" style="width: 18rem;">
                    <img src="{{ Storage::url($p->gambar) }}"class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-text">{{ $p->nama_product }} ({{$p->Kategori->nama}})</p>
                        </b>
                        <p class="card-text">{{ $p->deskripsi_product }}</p>
                        <p class="terjual">Terjual : {{ $p->terjual }}</p>
                        <p class="stok">Stok : {{ $p->stok_product }}</p>
                        <b>
                            <h5 class="harga">Rp.{{ number_format($p->harga_product, 2) }}</h5>
                        </b>


                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="sp1 m-3 shadow-lg">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-sp1">
                    <p>DIGITAL<br>GRAPHICS</p>
                    <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet temporibus dolore magnam dolor
                        modi nisi quae reprehenderit, ab debitis quaerat.</h6>
                    <button class="button_black">SHOP NOW</button>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('Image/product4.jpg') }}" class="img_sp" alt="" srcset="">
            </div>

        </div>
    </div>
    <div class="wanita mb-4 " id="wanita">
        <h2 class="m-4">Wanita</h2>
        <div class="bag1 row d-flex justify-content-around">
            @foreach ($wanita as $w)
                <div class="card col-lg-3 m-2" style="width: 18rem;">
                    <img src="{{ Storage::url($w->gambar) }}"class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-text">{{ $w->nama_product }} ({{$w->kategori->nama}})</p>
                        </b>
                        <p class="card-text">{{ $w->deskripsi_product }}</p>
                        <p class="terjual">Terjual : {{ $w->terjual }}</p>
                        <p class="stok">Stok : {{ $w->stok_product }}</p>
                        <b>
                            <h5 class="harga">Rp.{{ number_format($w->harga_product, 2) }}</h5>
                        </b>


                    </div>
                </div>
            @endforeach
        </div>
    @endsection
