@extends('master.master')
@section('content')

    
@if ($message = Session::get('nice'))
<div class="alert alert-info alert-sm" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container-table">
    <div class="row">
        <div class="col-md-10">
            <table class="table bg-info shadow-lg" style="border-radius: 10px">
                <thead>
                    <tr>
                        <th scope="col">Id&nbsp;Produk</th>
                        <th scope="col">Judul&nbsp;Produk</th>
                        <th scope="col">Deskripsi&nbsp;Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col" class="text-center">Gambar</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    @php
                    $i = 1
                    @endphp
                    @foreach($data as $produk)
                    <tr>
                        <td class="text-center">{{ $i++ }}</td>
                        <td>{{ $produk->judulProduk }}</td>
                        <td>{{ $produk->deskripsi }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td><img src="{{ asset('upload/'.$produk->gambar) }}" alt="" width="170px" height="170px"></td>
                        <td>
                            <a href="/edit/{{ $produk->id }}" class="btn btn-warning mb-1 shadow-lg btncrud">Edit</a>
                            <button type="button" class="btn btn-dark shadow-lg btncrud" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Hapus
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <center>
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <p class="blockout fs-5">Apakah Anda Yakin?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="/hapus/{{ $produk->id }}" class="btn btn-dark">Iya</a>
                </div>
            </div>
        </center>
    </div> 
</div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->


@endsection