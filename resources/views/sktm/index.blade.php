@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Registrasi SKTM</h2>
    <a href="{{ route('sktm.create') }}" class="btn btn-primary">Tambah SKTM</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
                <th>Dusun</th>
                <th>Desa</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sktms as $regis)
            <tr>
                <td>{{ $regis->no }}</td>
                <td>{{ $regis->nik }}</td>
                <td>{{ $regis->nama }}</td>
                <td>{{ $regis->jenis_kelamin }}</td>
                <td>{{ $regis->pekerjaan }}</td>
                <td>{{ $regis->dusun }}</td>
                <td>{{ $regis->desa }}</td>
                <td>{{ $regis->keterangan }}</td>
                <td>
                    <a href="{{ route('sktm.edit', $sktm->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('sktm.destroy', $sktm->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
