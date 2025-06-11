@extends('template')

@section('content')
	<h3>Data Tas</h3>

	<a href="/tas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/tas/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Merk
            </div>
            <div class="col-8">
		        <input type="text" name="merktas" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
		        <input type="text" name="hargatas" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">Tersedia</div>
            <div class="col-8">
                <div class="form-check">
                    <input type="checkbox" name="tersedia" value="1" class="form-check-input" id="tersediaCheck">
                    <label class="form-check-label" for="tersediaCheck">Tersedia</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
		        <input type="number" name="berat" required="required" class="form-control"></input>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
