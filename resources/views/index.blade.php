@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	{{-- <h2>www.malasngoding.com</h2> --}}
	<h3>Data Pegawai</h3>

	<br/>
	<br/>

    @section('konten')
    <a href="/pegawai/tambah" class="btn btn-secondary"> + Tambah Pegawai Baru</a>

	<p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Masukkan Nama Pegawai" value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai -> links()}}
@endsection


</body>
</html>
