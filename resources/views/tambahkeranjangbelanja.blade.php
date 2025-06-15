@extends('template')
@section('content')
	<h3>Tambah Keranjang Belanja Baru</h3>
	<a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>
    <br><br>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		<div class="row my-2">
            <div class="col-3">
                <label>Kode Barang</label>
            </div>
            <div class="col-8">
                <input type="number" name="kodebarang" required="required" class="form-control" placeholder="Masukkan kode barang">
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                <label>Jumlah Pembelian</label>
            </div>
            <div class="col-8">
                <input type="number" name="jumlah" required="required" class="form-control" placeholder="Masukkan jumlah pembelian">
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                <label>Harga Per Item</label>
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control" placeholder="Masukkan harga per item">
            <div class="row my-2">
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">

    </form>
@endsection
