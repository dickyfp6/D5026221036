@extends('master2')

@section('konten')
    <h1>Detail Kategori</h1>

    @if(isset($kategori))
        <p>Anda telah memiliki kategori dengan kode : {{ $kategori->ID }}</p>
    @else
        <p>Data kategori tidak ditemukan.</p>
    @endif

    <div class="text-center">
        <a href="{{ url('/kategori') }}" class="btn btn-dark">Kembali</a>
    </div>

@endsection
