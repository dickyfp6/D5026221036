@extends('master')
@section('isihalaman')
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

      	Nama   :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input class="btn btn-success"   type="submit" value="Simpan">
	</form>
@endsection
