@extends('layouts.index')
@section('title')
    Show Product
@endsection
@section('content')
    <div class="container mb-4 mt-4">

        <h2 class="m-4">Semua Product</h2>
        <div class="bag1 row d-flex justify-content-around">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @foreach ($product as $p)
                <div class="card col-lg-3 m-2 mt-4" style="width: 18rem;">
                    <img src="{{ Storage::url($p->gambar) }}"class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-text">{{ $p->nama_product }}({{ $p->kategori->nama }})</p>
                        </b>
                        <p class="card-text">{{ $p->deskripsi_product }}</p>
                        <p class="terjual">Terjual : {{ $p->terjual }}</p>
                        <p class="stok">Stok : {{ $p->stok_product }}</p>
                        <b>
                            <h5 class="harga">Rp.{{ $p->harga_product }}</h5>
                        </b>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editProduct{{ $p->id }}">
                                    <i class="fas fa-pen"></i>
                                </button>
                            </div>
                            <div class="modal fade" id="editProduct{{ $p->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Product </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-bodys p-3">
                                            <div class="form">
                                                <form action="/edit-product/{{ $p->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama Product</label>
                                                        <input type="text" value="{{ $p->nama_product }}"
                                                            class="form-control" name="nama" id="nama">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga" class="form-label">Harga Product</label>
                                                        <input type="number" value="{{ $p->harga_product }}"
                                                            class="form-control" name="harga" id="harga">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="stok" class="form-label">Stok Product</label>
                                                        <input type="number" value="{{ $p->stok_product }}"
                                                            class="form-control" name="stok" id="stok">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="terjual" class="form-label">Terjual Product</label>
                                                        <input type="number" value="{{ $p->terjual }}"
                                                            class="form-control" name="terjual" id="terjual">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="deskripsi" class="form-label">Deskripsi
                                                            Product</label>
                                                        <textarea name="deskripsi" class="form-control">{{ $p->deskripsi_product }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="kategori" class="form-label">Kategori Product</label>
                                                        <select class="form-select" name="kategori"
                                                            aria-label="Default select example">
                                                            <option selected>Pilih Kategori</option>
                                                            @foreach ($kategori as $k)
                                                                <option value="{{ $k->id }}"
                                                                    @if ($k->nama == $p->kategori->nama) selected  @endif>
                                                                    {{ $k->nama }}
                                                                </option>
                                                            @endforeach
                                                            {{-- <option selected>Pilih Kategori</option>


                                                            </option>
                                                            <option value="wanita"
                                                                @if ($p->kategory == 'wanita') selected @endif>Wanita
                                                            </option> --}}
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gambar" class="form-label">Gambar Product</label>
                                                        <input type="file" class="form-control"
                                                            value="{{ $p->gambar }}" name="gambar" id="gambar">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteProduct{{ $p->id }}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="modal fade" id="deleteProduct{{ $p->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda ingin menghapus <b>{{ $p->nama_product }}</b>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Tidak</button>
                                            {{-- <a href={{route('delete-product', [$p->id])}}> --}}
                                            <a href='/delete-product/{{ $p->id }}'>
                                                <button type="button" class="btn btn-danger">Ya</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
