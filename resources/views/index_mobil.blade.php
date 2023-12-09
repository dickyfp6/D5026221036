@extends('master2')
@section('title', 'Mobil')

@section('judul_halaman')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobil</title>
</head>
<body>
    <h3>Data Penjualan Mobil</h3>
    <br/>
    <br/>
    @section('konten')

    <div class="row">
        <div class="col-md-6">
            <a href="/mobil/tambah" class="btn btn-secondary"> + Post Mobil Baru</a>
        </div>
        <div class="col-md-6 text-right">
            <form action="/mobil/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Merk Mobil" value="{{ old('cari') }}">
                <input type="submit" value="CARI" class="btn btn-primary">
            </form>
        </div>
    </div>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            {{-- <th>Kode Mobil</th> --}}
            <th>Merk Mobil</th>
            <th>Stock Mobil</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach($mobil as $m)
        <tr>
            {{-- <td>{{ $m->kodemobil }}</td> --}}
            <td>{{ ucwords($m->merkmobil) }}</td>
            <td>{{ $m->stockmobil }}</td>
            <td>
                @if($m->tersedia == 'T')
                    <button type="button" class="btn btn-primary">Tersedia</button>
                @else
                    <button type="button" class="btn btn-danger">Tidak Tersedia</button>
                @endif
            </td>
            <td>
                <a href="/mobil/beli/{{ $m->kodemobil }}" class="btn btn-success">Beli</a>
                <a href="/mobil/hapus/{{ $m->kodemobil }}" class="btn btn-danger">Hapus Produk</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $mobil->links() }}
    @endsection
</body>
</html>
