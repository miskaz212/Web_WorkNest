@extends('layout.template')

@section('title', 'Detail Loker')

@section('title')

@section('content')
<div class="container shadow my-6 py-3 secondary" style="width:     100%">
<div class="card mb-3">
    <div class="row g-0">
    <div class="col-md-3">
        <img src="/images/{{ $loker['foto_sampul'] }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-9">
        <div class="card-body">
                <h2 class="card-title">{{ $loker['nama_loker'] }}</h2>
                <p class="card-text">{{ $loker['deskripsi'] }}</p>
                <p class="card-text">Gaji : {{ $loker['gaji'] }} juta /bulan</p>
                <p class="card-text">Kontrak kerja selama : {{ $loker['kontrak_kerja'] }} </p>

            @if (auth()->user()->role == 'user')

    <a href="{{ route('pekerja.create', ['id' => $loker->id]) }}" class="btn btn-primary">Saya Minat daftar ini</a>
@endif

        </div>
    </div>
    </div>
</div>
</div>
<a href="/manager/homepage" class="btn"><i class="bi bi-arrow-left"></i></i> Kembali</a>

@endsection
