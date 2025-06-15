@extends('template')
@section('content')
	<h3>Data keranjang belanja</h3>
	<a href="/keranjangbelanja/tambah" class="btn btn-success"> + Beli</a>
	<br/>
	<br/>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjangbelanja as $kj)
                @php
                    $total = $kj->Jumlah * $kj->Harga;
                @endphp
                <tr>
                    <td>{{ $kj->ID }}</td>
                    <td>{{ $kj->KodeBarang }}</td>
                    <td>{{ $kj->Jumlah }}</td>
                    <td>Rp {{ number_format($kj->Harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangbelanja/hapus/{{ $kj->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
