@extends('layout.template')

@section('title', 'Edit Data loker')

@section('content')
    <div class="container">
        <h1>Edit Data loker</h1>

<form action="{{ route('lokers.update', ['id' => $loker->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">ID loker</label>
        <input type="text" class="form-control" id="id" name="id" value="{{ $loker->id }}" disabled>

    </div>
    <div class="form-group">
        <label for="nama_loker">Nama Loker</label>
        <input type="text" class="form-control" id="nama_loker" name="nama_loker" value="{{ $loker->nama_loker }}">
    </div>

            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select name="category_id" id="category_id" class="form-select">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $loker->category_id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi">{{ $loker->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="gaji">Gaji</label>
                <input type="number" class="form-control" id="gaji" name="gaji" value="{{ $loker->gaji }}">
            </div>

            <div class="form-group">
                <label for="kontrak_kerja">Kontrok kerja</label>
                <input type="text" class="form-control" id="kontrak_kerja" name="kontrak_kerja" value="{{ $loker->kontrak_kerja }}">
            </div>

            <div class="form-group">
                <label for="foto_sampul" class="form-label">Sampul film</label>
                    <img src="/images/{{ $loker->foto_sampul }}" alt="" width="20%">
            </div>
            <div class="form-group">
                <label for="foto_sampul">Foto Sampul</label>
                <input type="file" class="form-control" id="foto_sampul" name="foto_sampul">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
