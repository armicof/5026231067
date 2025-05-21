<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }
    public function index()
    {
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Jl. Raya No. 123";
        $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('biodata',['nama'=>$nama, 'umur'=>$umur, 'alamat'=>$alamat, 'matkul' => $matkul]);
    }
}
