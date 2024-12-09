@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Pengumuman</h2>
    <form action="/admin/pengumuman" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul Pengumuman</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi Pengumuman</label>
            <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
</div>
@endsection
