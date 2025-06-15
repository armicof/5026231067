<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        // mengirim data pegawai ke view index
        return view('indexkeranjangbelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function tambah()
    {

        return view('tambahkeranjangbelanja');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);

        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjangbelanja');
    }
}
