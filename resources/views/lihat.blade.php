@extends('master2')

@section('konten')
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
@endsection
