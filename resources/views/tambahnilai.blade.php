@extends('template')

@section('content')
<script src="{{ asset('js/script.js') }}"></script>
	<h3>Data Nilai</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form name="tambahnilai" action="/eas/store" onsubmit="return validateNRP" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                NRP
            </div>
            <div class="col-8">
		        <input type="text" name="nomorinduksiswa" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Nilai
            </div>
            <div class="col-8">
		        <input type="number" name="nilaiangka" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                SKS
            </div>
            <div class="col-8">
		        <input type="number" name="sks" required="required" class="form-control"></input>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
