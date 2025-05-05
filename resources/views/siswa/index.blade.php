@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Daftar Siswa</h2>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
    </div>

    @if($siswas->isEmpty())
        <div class="alert alert-warning">Belum ada data siswa.</div>
    @else
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->email }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa) }}" method="POST" class="d-inline">
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
