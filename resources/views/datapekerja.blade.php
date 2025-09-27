@extends('layout.template')

@section('title', 'Data Pekerja')

@section('content')
    <div class="container">
        <h1>Data Pekerja Yang Mendaftar</h1>
        @if(session('success'))
            <div class="alert alert-success">
                <i class="bi bi-check2-square"></i>
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr class="tr text-center">
                    <th class="bg-info" scope="col" style="width: 5%;">No</th>
                    <th class="bg-info" scope="col" style="width: 10%;">Email akun</th>
                    <th class="bg-info" scope="col" style="width: 20%;">Nama Pekerja</th>
                    <th class="bg-info" scope="col" style="width: 15%;">Perusahaan</th>
                    <th class="bg-info" scope="col" style="width: 20%;">Pekerjaan</th>
                    <th class="bg-info" scope="col" style="width: 20%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pekerja as $item)
                    <tr class="tr text-center">
                        <td class="bg-secondary text-center">{{ $loop->iteration }}</td>
                        @if ($item->user)
                            <td>{{ $item->user->email }}</td>
                        @endif

                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->category->nama_kategori }}</td>
                        <td>{{ $item->loker->nama_loker }}</td>
                        <td>
                            @if (auth()->user()->role == 'user')
                            <a href="{{ route('pekerja.edit', ['pekerja_id' => $item->id, 'loker_id' => $item->loker->id]) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('pekerja.detail', $item->id) }}" class="btn btn-primary">Lihat</a>
                            @endif

                            <form action="{{ route('pekerja.destroy', $item->id) }}" method="post" style="display: inline-block;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>

                            @if (auth()->user()->role == 'admin')
                            <a href="{{ route('pekerja.print', $item->id) }}" class="btn btn-primary">lihat</a>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Tidak ada data pekerja.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
