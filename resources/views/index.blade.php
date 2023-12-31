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
    <div class="row">
        <div class="col-md-6">
            <a href="/pegawai/tambah" class="btn btn-secondary"> + Tambah Pegawai Baru</a>
        </div>
        <div class="col-md-6 text-right">
            <form action="/pegawai/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Nama Pegawai" value="{{ old('cari') }}">
                <input type="submit" value="CARI" class="btn btn-primary">
            </form>
        </div>
    </div>
    <br>
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
            <td
            @if ($p->pegawai_umur <= 20)
                class="bg-success text-white"
            @elseif ($p->pegawai_umur >= 21 && $p->pegawai_umur <= 30)
                class="bg-warning text-danger"
            @else
                class="bg-primary text-white"
            @endif
            >{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/lihat/{{ $p->pegawai_id }}" class="btn btn-success">Lihat</a>
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
