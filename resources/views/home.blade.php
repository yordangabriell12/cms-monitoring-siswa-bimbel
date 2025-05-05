@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="text-center">
        <h1>Selamat Datang di CMS Monitoring Siswa</h1>
        <p class="lead">Sistem monitoring untuk pencatatan kehadiran, nilai, dan laporan belajar siswa bimbel secara digital.</p>
        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Lihat Data Siswa</a>
    </div>
@endsection
