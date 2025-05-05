@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <h2>Edit Artikel</h2>
    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Konten:</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $article->content }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
    </form>
@endsection
