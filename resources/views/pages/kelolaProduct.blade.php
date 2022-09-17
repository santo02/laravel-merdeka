@extends('layouts.index')
@section('title')
    Kelola Product
@endsection
@section('content')
    <div class="container product">
        <div class="form">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <a href={{Route('show-product')}}>Lihat semua product</a>
            <h1>Tambah Product </h1>
            <form action="{{ Route('add-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Product</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Product</label>
                    <input type="number" class="form-control" name="harga" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Product</label>
                    <input type="number" class="form-control" name="stok" id="stok">
                </div>
                <div class="mb-3">
                    <label for="terjual" class="form-label">Terjual Product</label>
                    <input type="number" class="form-control" name="terjual" id="terjual">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Product</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Product</label>
                    <select class="form-select" name="kategori" aria-label="Default select example">
                        <option selected>Pilih Kategori</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Product</label>
                    <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
@endsection