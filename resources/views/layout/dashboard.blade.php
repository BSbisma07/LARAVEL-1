@extends('master.master')
@section('content')

@if ($message = Session::get('nice'))
<div class="alert alert-info alert-sm" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container-dashboard">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    Selamat Datang di Halaman Dashboard School Gallery SMKN 2 Banjarmasin
                </div>
            </div>
            <div class="card text-center card-center d-flex justify-content-center mt-1" style="width: 23.2 rem;">
                <div class="card-body">
                    <h5 class="card-text">{{ $data }}</h5>
                    <h6 class="card-text">Produk</h6>
                </div>
            </div>
        </div>
    </div>

    @endsection