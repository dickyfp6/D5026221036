<!DOCTYPE html>
<html>
<head>
	<title>Mobil</title>
</head>
<body>
@extends('master2')
    @section('konten')
	<h3>Data Jual Mobil</h3>
	<a href="/mobil">Kembali</a>
	<br/>
	<br/>
	<form action="/mobil/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "merkmobil" class = "col-sm-2 control-label">Merk Mobil</label>
            <div class = "col-sm-10">
               <input type="text" name = "merkmobil" class = "form-control" placeholder = "Masukkan Merk Mobil">
            </div>
         </div>
         <div class = "form-group">
            <label for = "stockmobil" class = "col-sm-2 control-label">Jumlah</label>
            <div class = "col-sm-10">
               <input type="text" name = "stockmobil" class = "form-control" placeholder = "Masukkan Jumlah Mobil" required min="1">
            </div>
         </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
</body>
</html>
