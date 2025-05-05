@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')
    <h2>Tambah Artikel</h2>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Judul</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content">Konten</label>
            <textarea class="form-control" name="content" rows="5" required></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
@endsection
