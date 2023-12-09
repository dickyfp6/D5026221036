<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
	public function index3()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();

		$mobil = DB::table('mobil')->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index_mobil',['mobil' => $mobil]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah3()
	{
		// memanggil view tambah
		return view('tambahmobil');

	}

	// method untuk insert data ke table pegawai
    public function store3(Request $request)
    {
        // Normalisasi merk mobil ke huruf kecil
        $merkMobil = strtolower($request->merkmobil);

        // Cek apakah merk mobil sudah ada dalam database
        $existingMobil = DB::table('mobil')->where('merkmobil', $merkMobil)->first();

        if ($existingMobil) {
            // Jika merk mobil sudah ada, tambahkan stok baru ke stok yang sudah ada
            $newStock = $existingMobil->stockmobil + $request->stockmobil;

            // Update stok mobil yang sudah ada
            DB::table('mobil')->where('merkmobil', $merkMobil)->update([
                'stockmobil' => $newStock,
                'tersedia' => ($newStock > 0) ? 'T' : 'F', // Tersedia jika stok lebih dari 0, sebaliknya 'F'
            ]);
        } else {
            // Jika merk mobil belum ada, buat data baru
            DB::table('mobil')->insert([
                'merkmobil' => $merkMobil,
                'stockmobil' => $request->stockmobil,
                'tersedia' => ($request->stockmobil > 0) ? 'T' : 'F', // Tersedia jika stok lebih dari 0, sebaliknya 'F'
            ]);
        }

        return redirect('/mobil');
    }


	public function beli(Request $request, $kodemobil)
{
    $mobil = DB::table('mobil')->where('kodemobil', $kodemobil)->first();
    return view('belimobil', ['mobil' => $mobil]);
}

public function prosesBeli(Request $request, $kodemobil)
{
    // Mendapatkan informasi stok mobil dari parameter
    $stokMobil = $request->input('stockmobil');

    $this->validate($request, [
        'jumlah' => 'required|integer|min:1|max:' . ($stokMobil ?? PHP_INT_MAX),
    ]);

    DB::table('mobil')->where('kodemobil', $kodemobil)->decrement('stockmobil', $request->jumlah);

    // Mendapatkan stok mobil setelah pembelian
    $stokMobilBaru = DB::table('mobil')->where('kodemobil', $kodemobil)->value('stockmobil');

    // Perbarui nilai kolom tersedia berdasarkan stok baru
    $tersedia = ($stokMobilBaru > 0) ? 'T' : 'F';

    // Update nilai kolom 'tersedia' di dalam tabel 'mobil'
    DB::table('mobil')->where('kodemobil', $kodemobil)->update(['tersedia' => $tersedia]);
    return redirect('/mobil');

}


////
	// method untuk hapus data pegawai
	public function hapus3($kodemobil)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mobil')->where('kodemobil',$kodemobil)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/mobil');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index_mobil',['mobil' => $mobil]);

	}

}
