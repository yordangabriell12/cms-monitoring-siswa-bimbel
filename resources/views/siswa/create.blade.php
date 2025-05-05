@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
    <h2>Tambah Siswa</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas:</label>
            <input type="text" name="kelas" id="kelas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
@endsection
