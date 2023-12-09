<!-- resources/views/beli_mobil.blade.php -->
@extends('master2')
@section('title', 'Beli Mobil')

@section('konten')
<div class="row">
    <div class="col-md-6">
        <!-- Kotak Kosong di Bagian Kiri -->
    </div>
    <div class="col-md-6">
        <h3>Beli Mobil</h3>
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Merk Mobil</td>
                    <td>: {{ ucwords($mobil->merkmobil) }}</td>
                </tr>
                <tr>
                    <td>Stock Mobil Tersedia</td>
                    <td>: {{ $mobil->stockmobil }}</td>
                </tr>
            </tbody>
        </table>
    <form action="/mobil/proses-beli/{{ $mobil->kodemobil }}" method="post">
        @csrf
        <div class = "form-group">
            <label for = "jumlah" class = "control-label">  Jumlah Mobil</label>
            <div class = "col-sm-10">
               <input type="number" name="jumlah" min="1" max="{{ $mobil->stockmobil }}" required class = "form-control" placeholder = "Masukkan Jumlah Mobil">
            </div>
         </div>
         <button type="submit">Beli Mobil</button>
    </form>
    </div>
</div>
@endsection

<div class="row">
    <div class="col-md-6">
        <!-- Kotak Kosong di Bagian Kiri -->
    </div>
    <div class="col-md-6">
        <h1>Detail Pegawai</h1>

        @if(isset($pegawai))
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>: {{ $pegawai->pegawai_nama }}</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>: {{ $pegawai->pegawai_jabatan }}</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>: {{ $pegawai->pegawai_umur }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ $pegawai->pegawai_alamat }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center"> <a href="{{ url('/pegawai') }}" class="btn btn-dark">OK</a> </div>
            <!-- Tombol Kembali ke Menu Pegawai -->

        @else
            <p>Data pegawai tidak ditemukan.</p>
        @endif
        <div>

        </div>
    </div>
</div>

