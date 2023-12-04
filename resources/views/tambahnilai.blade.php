<!DOCTYPE html>
<html>
<head>
	<title>Nilai Kuliah</title>
</head>
<body>
@extends('master2')
    @section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Mahasiswa</h3>

	<a href="/nilai"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
               <input type="text" name = "NRP" class = "form-control" id = "NRP" placeholder = "Masukkan NRP Mahasiswa">
            </div>
         </div>
         <div class = "form-group">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-10">
               <input type="text" name = "NilaiAngka" class = "form-control" id = "NilaiAngka" placeholder = "Masukkan Nilai Angka">
            </div>
         </div>
         <div class = "form-group">
            <label for = "SKS" class = "col-sm-2 control-label">Jumlah SKS</label>
            <div class = "col-sm-10">
               <input type="text" name = "SKS" class = "form-control" id = "SKS" placeholder = "Masukkan SKS Mata Kuliah">
            </div>
         </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection


</body>
</html>
