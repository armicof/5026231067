<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
	public function index()
	{
    		// mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->paginate(10);

    		// mengirim data pegawai ke view index
		return view('crud/index',['pegawai' => $pegawai]);

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
        $val = $request->old('cari');

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
        ->paginate();

    		// mengirim data pegawai ke view index
		return view('crud/index',['pegawai' => $pegawai, 'cari' => $cari]);
	}

	public function tambah()
    {

        return view('crud/tambah');
    }

	public function store(Request $request)
	{
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

		return redirect('/pegawai');
    }

	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

		// passing data pegawai yang didapat ke view edit
		return view('crud/edit', ['pegawai' => $pegawai]);
	}

	public function update(Request $request)
	{

		DB::table('pegawai')->where('pegawai_id', $request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

        return redirect('/pegawai');
    }

    public function hapus($id)
	{
		DB::table('pegawai')->where('pegawai_id', $id)->delete();
		return redirect('/pegawai');
	}
}
