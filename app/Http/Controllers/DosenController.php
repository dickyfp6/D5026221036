<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{

public function index(){
    $a=3;
    $b=4;
    $c=$a*$b;
    return "<h1>Hasil perkalian ".(string)$c."</h1>";
}
public function showBlog(){
    $nama="Dicky";
    $alamat="Gebang, Surabaya";
    $umur=19;
    return view('blog', ['nama'== $nama,'alamt'== $alamat,'umur'== $umur]);
}
public function shownama($nama){
    return "Anda telah mengisi " .$nama;
}

 public function formulir(){
    return view('formulir');
}

public function proses(Request $request){
    $nama = $request->input('nama');
     $alamat = $request->input('alamat');
    return "Nama :  ".$nama.", Alamat : ".$alamat;
}
}

