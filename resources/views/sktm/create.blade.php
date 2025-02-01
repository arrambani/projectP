@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah SKTM</h2>
    <form action="{{ route('sktm.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>No</label>
            <input type="text" name="no" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dusun</label>
            <input type="text" name="dusun" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Desa</label>
            <input type="text" name="desa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
