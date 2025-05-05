@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <h2>Edit Artikel</h2>
    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="title">Judul</label>
            <input type="text" class="form-control" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content">Konten</label>
            <textarea class="form-control" name="content" rows="5" required>{{ $article->content }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
