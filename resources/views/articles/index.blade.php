@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Artikel</h2>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel</a>
    </div>

    @if($articles->isEmpty())
        <div class="alert alert-warning">Belum ada data artikel.</div>
    @else
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($article->content, 60) }}</td>
                        <td>
                            <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
