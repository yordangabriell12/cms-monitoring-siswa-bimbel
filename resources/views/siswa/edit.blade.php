@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <h2>Edit Siswa</h2>
    <form action="{{ route('siswa.update', $siswa) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas:</label>
            <input type="text" name="kelas" id="kelas" value="{{ $siswa->kelas }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" value="{{ $siswa->email }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
@endsection
