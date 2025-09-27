@extends('layout.template')

@section('title', 'Input Loker')

@section('content')

@section('content')
    <div class="container shadow my-6 py-3 secondary" style="width: 70%">
        <h1>Tambahkan Info Loker </h1> {{--  @if(auth()->user()) {{ auth()->user()->name }} @else Pengunjung @endif</h1> --}}
            <form action="/lokers/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">Kode Loker</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="kode loker">
                </div>
                <div class="mb-3">
                    <label for="nama_loker" class="form-label">Nama Loker</label>
                    <input type="text" class="form-control" id="nama_loker" name="nama_loker" placeholder="Nama Loker">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Perusahaan</label>
                    <select name="category_id" id="category_id">
                        <option value="">Pilih Perusahaan </option>
                        @foreach ($categories as $categorik)
                            <option value="{{$categorik->id}}">{{$categorik->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="gaji" class="form-label">Gaji Yang Diberikan</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" placeholder="Gaji Yang Diberikan">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Loker</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="kontrak_kerja" class="form-label">Kontrak Kerja</label>
                    <input type="text" class="form-control" id="kontrak_kerja" name="kontrak_kerja" placeholder="Kontrak Kerja">
                </div>
                <div class="mb-3">
                    <label for="foto_sampul" class="form-label">Foto/ Poster Loker</label>
                    <input class="form-control" type="file" name="foto_sampul" id="foto_sampul" accept="">
                </div>
                <div class="mb-3">
                    <a href="/manager/homepage" class="btn btn-dark">Kembali</a>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>
    </div>
    {{-- <div class="container my-2 py-3 shadow" style="width: 70%"> --}}

@endsection
