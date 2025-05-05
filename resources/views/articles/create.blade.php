@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')
    <h2>Tambah Artikel</h2>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Konten:</label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
@endsection
