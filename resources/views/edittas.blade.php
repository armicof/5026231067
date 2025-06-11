@extends('template')

@section('content')
	<h3>Edit Tas</h3>

	<a href="/tas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tas as $t)
	<form action="/tas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		Merk <input type="text" required="required" name="merktas" value="{{ $t->merktas }}" class="form-control"> <br/>
		Harga <input type="text" required="required" name="hargatas" value="{{ $t->hargatas }}" class="form-control"> <br/>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="tersediaCheck{{ $t->ID }}" name="tersedia" value="1" {{ $t->tersedia ? 'checked' : '' }}>
            <label class="form-check-label" for="tersediaCheck{{ $t->ID }}">Tersedia</label>
        </div>
        Berat <textarea required="required" name="berat" class="form-control">{{ $t->berat }}</textarea> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
