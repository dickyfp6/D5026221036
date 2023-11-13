<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
    <h3>www.malasngoding.com</h3>
    <p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
    <p>Ini adalah view blog. Ada di route Blog.</p>
    <p>
        Nama : {{ $nama }} -
        Alamat : {{ $alamat }} -
        Umur : {{ $umur }}
    </p>
    <a href="/pegawai/{{ date('D M Y') }}"></a>
</body>
</html>
