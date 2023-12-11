@extends('master2')
@section('title', 'Mobil')

@section('judul_halaman')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kategori</title>
</head>
<body>
    <h3>Kode Soal CC - Kategori</h3>
    <br/>
    <br/>
    @section('konten')
    <form action="/kategori/kirim" method="post">
        @csrf
        @method('post')
        <label for="Nama_input">Pilih Kategori</label>
        <select name="Nama_input" id="Nama_input" class="form-control">
            <option value="Elektronik">Elektronik</option>
            <option value="Rumah Tangga">Rumah Tangga</option>
            <option value="Komputer">Komputer</option>
        </select>
        <br>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </form>
    {{-- {{ $kategori->links() }} --}}
    @endsection
</body>
</html>
