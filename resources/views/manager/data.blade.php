@extends('layout.template')

@section('title', 'Data Loker')

@section('content')
<div class="container">
    <h1>Data lowongan kerja </h1>
    @if (session('success'))
        <div class="alert alert-success">
            <i class="bi bi-check2-square"></i>
            {{session('success')}}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr class="tr text-center">
            <th class="bg-info" scope="col" style="width: 5%;">no</th>
            <th class="bg-info" scope="col" style="width: 5%;">Id</th>
            <th class="bg-info" scope="col" style="width: 15%;">Nama Pekerjaan</th>
            <th class="bg-info" scope="col" style="width: 20%;">Nama Perusahaan</th>
            <th class="bg-info" scope="col" style="width: 10%;">Gaji Pekerjaan /Bln</th>
            <th class="bg-info" scope="col" style="width: 15%;">Kontrak Kerja</th>
            <th class="bg-info" scope="col" style="width: 15%;">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($lokers as $loker)
                <tr class="tr text-center">
                    <th class="bg-secondary text-center" scope="row">{{$loop->iteration}}</th>
                    <td>{{$loker->id}}</td>
                    <td>{{$loker->nama_loker}}</td>
                    <td>{{$loker->category->nama_kategori}}</td>
                    <td>{{$loker->gaji}}</td>
                    <td>{{$loker->kontrak_kerja}}</td>

                    <td>
                        <a href="{{ route('edit.loker', ['id' => $loker->id]) }}" class="btn btn-warning btn-sm">Edit</a> |
                        <a href="{{ route('lokers.delete', ['id' => $loker->id])}}" onclick="return confirm('Apakah anda yakin mau menghapus data ini?')" class="btn btn-danger btn-sm">hapus</a> |
                        <a href="/loker/{{ $loker['id'] }}" class="btn btn-primary btn-sm">lihat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center my-4">
        {{ $lokers->links('pagination::bootstrap-4', ['onEachSide' => 1]) }}
    </div>
</div>
@endsection
