@extends('template')

@section('content')
	<h3>Data Tas</h3>

	<a href="/tas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Merk
            </div>
            <div class="col-8">
		        <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
		        <input type="text" name="jabatan" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
		        <input type="number" name="umur" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
		        <textarea name="alamat" required="required" class="form-control"></textarea>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
