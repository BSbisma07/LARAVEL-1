@extends('master.master')
@section('content')
    <div class="input-text">
        <h4><p class="blockout">Halaman Input Data</p></h4>
    </div>

    <div class="container shadow-lg">
        <div class="col-md-8">
            <form action="/createData" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Judul Produk --}}
            <div class="form-group m-2">
                <label for="">Judul Produk</label>
                <input class="form-control" type="text" name="judulProduk" id="" placeholder="Masukkan Judul Produk">
            </div>
            {{-- Deskripsi Produk --}}
            <div class="form-group m-2">
                <label for="">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="" placeholder="Masukkan Deskripsi">
            </div>
            {{-- Harga --}}
            <div class="form-group m-2">
                <label for="">Harga</label>
                <input class="form-control" type="number" name="harga" id="" placeholder="Masukkan Harga">
            </div>
            {{-- Gambar --}}
            <div class="form-group m-2 file">
                <label for="">Upload Gambar</label>
                <input class="form-control" type="file" name="gambar" id="">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection