<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
@extends('master2')
    @section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <br> <input type="text" required="required" class="form-control" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <br> <input type="text" required="required" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <br> <input type="number" required="required" class="form-control" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <br> <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
</body>
</html>
















