<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EASController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai')->get();
        return view('indexnilai', ['nilai' => $nilai]);
    }
    public function tambah()
    {
        return view('tambahnilai');
    }
    public function store(Request $request){
        DB::table('nilai')->insert([
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

		return redirect('/eas');
    }
}
