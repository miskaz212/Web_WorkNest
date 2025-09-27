@extends('layout.template')

@section('title', 'Homepage')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="hero-wrap d-flex align-items-center justify-content-center text-center" style="background-image: url('/images/home/user.jpg'); background-size: cover; height: 50vh; filter: brightness(80%);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-12 text-md-left">
                <h1 class="mb-8">
                    <strong>
                        Selamat Datang @if(auth()->user()) {{ auth()->user()->name }} @else Pengunjung @endif
                    </strong>
                </h1>
                <h3>
                    Dari Kita Untuk<span style="color: #3822ff;"> Warga</span> Bantu Masa Depan Negara</strong>
                </h3>
                <form action="/manager/homepage" class="d-flex justify-content-center mx-auto mt-3" role="search">
                    <input class="form-control me-2" style="width: 300px;" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light bg-primary" type="submit">Search</button>
                </form>


            </div>
        </div>
    </div>
</div>

<div class="container bg-primary-subtle p-4 rounded">
    <h3 class="mb-2 text-center">Pekerjaan Paling Top</h3>
    <div class="row p-2">
        @foreach ($lokers as $loker)
        <div class="col-lg-4"> <!-- Set column width to 4 for each card -->
            <div class="card mb-3">
                <img src="/images/{{ $loker['foto_sampul'] }}" class="card-img-top" alt="..." style="height: 400px;"> <!-- Set a fixed height for the card image -->
                <div class="card-body">
                    <h5 class="card-title">{{ $loker['nama_loker'] }}</h5>
                    <p class="card-text">Gaji yang ditawarkan : Rp.{{ $loker['gaji'] }} Juta</p>
                    <p class="card-text">Open Recruitment : {{ $loker['deskripsi'] }}</p>
                    <a href="/loker/{{ $loker['id'] }}" class="btn btn-primary">info selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center my-4">
        {{ $lokers->links('pagination::bootstrap-4', ['onEachSide' => 1]) }}
    </div>
</div>
@endsection
