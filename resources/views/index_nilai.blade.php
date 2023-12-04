@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')

<!DOCTYPE html>
<html>
<head>
	<title>Nilai Kuliah</title>
</head>
<body>

	{{-- <h2>www.malasngoding.com</h2> --}}
	<h3>Data Nilai Mahasiswa</h3>

	<br/>
	<br/>

    @section('konten')
    <a href="/nilai/tambah" class="btn btn-secondary"> + Tambah Nilai Baru</a>

	{{-- <p>Cari Data Pegawai :</p>
	<form action="/nilai/cari" method="GET">
		<input type="text" name="cari" placeholder="Masukkan Nama Pegawai" value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form> --}}

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            {{-- <th>Opsi</th> --}}
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @if($n->NilaiAngka <= 40)
                D
                @elseif($n->NilaiAngka <= 60)
                C
                @elseif($n->NilaiAngka <= 80)
                B
                @else
                A
                @endif
            </td>
            <td>{{$n->NilaiAngka*$n->SKS}} </td>
			{{-- <td>
                <a href="/nilai/lihat/{{ $n->ID }}" class="btn btn-success">Lihat</a>
				<a href="/nilai/edit/{{ $n->ID }}" class="btn btn-warning">Edit</a>
				<a href="/nilai/hapus/{{ $n->ID }}" class="btn btn-danger">Hapus</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
    {{ $nilaikuliah -> links()}}
@endsection


</body>
</html>
