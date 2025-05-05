@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <h2>Daftar Artikel</h2>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tambah Artikel</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($articles->isEmpty())
        <p>Tidak ada artikel.</p>
    @else
        <ul class="list-group">
            @foreach($articles as $article)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <strong>{{ $article->title }}</strong><br>
                        {{ \Str::limit($article->content, 100) }}
                    </span>
                    <span>
                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus artikel ini?')">Hapus</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
