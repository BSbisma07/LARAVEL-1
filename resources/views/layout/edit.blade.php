@extends('master.master')
@section('content')
<div class="input-text">
    <h4>
        <p class="blockout">Halaman Input Data</p>
    </h4>
</div>

<div class="container shadow-lg" style="height: 450px;">
    <div class="col-md-8">
        <form action="/updateData/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Judul Produk --}}
            <div class="form-group m-2">
                <label for="">Judul Produk</label>
                <input class="form-control" type="text" name="judulProduk" id="" placeholder="Masukkan Judul Produk"
                    value="{{ $data->judulProduk }}">
            </div>
            {{-- Deskripsi Produk --}}
            <div class="form-group m-2">
                <label for="">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="" placeholder="Masukkan Deskripsi"
                    value="{{ $data->deskripsi }}">
            </div>
            {{-- Harga --}}
            <div class="form-group m-2">
                <label for="">Harga</label>
                <input class="form-control" type="number" name="harga" id="" placeholder="Masukkan Harga"
                    value="{{ $data->harga }}">
            </div>
            {{-- Gambar --}}
            <div class="form-group m-2 file">
                <label for="">Upload Gambar</label>
                <img src="{{ asset('upload/'.$data->gambar) }}" alt="" class="mb-1" width="100px" height="100px">
                <input class="form-control" type="file" name="gambar" id="">
                @error('gambar')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@endsection