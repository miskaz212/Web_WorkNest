@extends('layout.template')

@section('title', 'Edit Data Pekerja')

@section('content')
    <div class="container shadow my-6 py-3 secondary" style="width: 70%">
        <h1>Edit Pekerja</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pekerja.update', $pekerja->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pekerja</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pekerja->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="ktp" class="form-label">No KTP</label>
                <input type="text" class="form-control" id="ktp" name="ktp" value="{{ $pekerja->ktp }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pekerja</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pekerja->alamat }}" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $pekerja->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="loker_id" class="form-label">Loker ID</label>
                <input type="text" class="form-control" id="loker_id" name="loker_id" value="{{ $pekerja->loker_id }}" readonly>
            </div>

            <a href="{{ route('pekerja.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
