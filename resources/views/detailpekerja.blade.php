@extends('layout.template')

@section('title', 'Detail Data Pekerja')

@section('content')
<div class="container shadow my-6 py-3 secondary" style="width: 100%">
    <div class="card mb-3">
        <div class="row g-0">

            <div class="col-md-3">
                <img src="/images/{{ $pekerja['foto_sampul'] }}" class="img-fluid rounded-start" alt="...">
            </div>

            <div class="col-md-9">
                <div class="card-body">
                        @if ($pekerja)
                        <h1 class="card-title"><strong>Nama Pekerja :{{ $pekerja->nama }}</strong></h1>

                        <h3 class="card-text">No. KTP : {{ $pekerja->ktp }}</h3>
                        <h3 class="card-text">Alamat : {{ $pekerja->alamat }}</h3>
                        <h3 class="card-text">Mendaftar Sebagai : {{ $pekerja->loker->nama_loker }}</h3>
                        <h3 class="card-text">Mendaftar Bekerja Di : {{ $pekerja->category->nama_kategori }}</h3>

                        <h5 class="card-text" style="text-align: right;">Status Lamaran : <span style="color: #2dc304;">Sedang di proses</span></h5>

                    @else
                        <p>Data pekerja tidak ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/pekerja/datapekerja" class="btn"><i class="bi bi-arrow-left"></i> Kembali</a>
@endsection
