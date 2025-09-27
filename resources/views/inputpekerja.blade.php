@extends('layout.template')

@section('title', 'Input Data Pekerja')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container shadow my-6 py-3 secondary" style="width: 80%">
        <h1>Daftar Pekerjaan</h1>
        <form action="{{ route('pekerja.store', ['id' => $loker->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pekerja :</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ktp" class="form-label">No Ktp :</label>
                <input type="text" class="form-control" id="ktp" name="ktp" required>
                @error('ktp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pekerja :</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Tempat Kerja :</label>
                <select name="category_id" id="category_id" class="form-select">
                    <option value="">Pilih Perusahaan</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="loker_id">Pekerjaan yang diminati :</label>
                <input type="text" class="form-control" id="loker_id" name="loker_id" value="{{ $loker->id }}" required readonly>
                <span>{{ $loker->nama_loker }}</span>
                @error('loker_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="foto_sampul" class="form-label">Foto Sampul</label>
                <input type="file" class="form-control" id="foto_sampul" name="foto_sampul">
            </div>

            <div class="mb-3">
                <a href="/manager/homepage" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
