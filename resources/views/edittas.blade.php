@extends('template')

@section('content')
	<h3>Edit Tas</h3>

	<a href="/tas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tas as $t)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		Merk <input type="text" required="required" name="nama" value="{{ $t->merktas }}" class="form-control"> <br/>
		Harga <input type="text" required="required" name="jabatan" value="{{ $t->hargatas }}" class="form-control"> <br/>
		Ketersediaan <input type="number" required="required" name="umur" value="{{ $t->tersedia }}" class="form-control"> <br/>
		Berat <textarea required="required" name="alamat" class="form-control">{{ $t->berat }}</textarea> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
