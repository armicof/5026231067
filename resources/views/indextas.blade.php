@extends('template')

@section('content')
<h3>Data Tas</h3>
<a href="/tas/tambah" class="btn btn-primary"> + Tambah Tas Baru</a>
<p>Cari Data Tas :</p>
	<form action="/tas/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Tas .." ">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

<br/>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
            <th>Opsi</th>
		</tr>
		@foreach($tas as $t)
		<tr>
			<td>{{ $t->merktas }}</td>
			<td>{{ $t->hargatas }}</td>
			<td>{{ $t->tersedia }}</td>
			<td>{{ $t->berat }}</td>
			<td>
				<a href="/tas/edit/{{ $t->ID }}" class="btn btn-success">Edit</a>
				<a href="/tas/hapus/{{ $t->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

{{ $tas->links() }}
@endsection
