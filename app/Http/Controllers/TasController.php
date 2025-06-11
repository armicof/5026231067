<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TasController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $tas = DB::table('tas')->paginate(10);

        // mengirim data pegawai ke view index
        return view('indextas', ['tas' => $tas]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        // mengambil data dari table tas sesuai pencarian data
        $tas = DB::table('tas')
            ->where('merktas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data tas ke view index
        return view('indextas', ['tas' => $tas, 'cari' => $cari]);
    }

    public function tambah()
    {

        return view('tambahtas');
    }

    public function store(Request $request)
    {
        DB::table('tas')->insert([
            'merktas' => $request->merktas,
            'hargatas' => $request->hargatas,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tas');
    }


    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tas = DB::table('tas')->where('ID', $id)->get();

        // passing data pegawai yang didapat ke view edit
        return view('edittas', ['tas' => $tas]);
    }

    public function update(Request $request)
    {

        DB::table('tas')->where('ID', $request->id)->update([
            'merktas' => $request->merktas,
            'hargatas' => $request->hargatas,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tas');
    }

    public function hapus($id)
    {
        DB::table('tas')->where('ID', $id)->delete();
        return redirect('/tas');
    }
}
