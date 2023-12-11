<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index4()
	{
		$kategori = DB::table('kategori');
		return view('index_kategori', ['kategori' => $kategori]);
	}

    public function kirim(Request $request)
    {
        $nama = $request->input('Nama_input');

        $kategori = DB::table('kategori')->where('Nama', $nama)->first();

        if ($kategori) {
            return view('lihat_kategori', ['kategori' => $kategori]);
        } else {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan');
        }
    }




}

