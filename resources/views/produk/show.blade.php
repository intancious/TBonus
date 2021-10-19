@extends('adminlte.master')
@section('content')
<div class="container my-5">
    <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
        <div class="card-header">Show Produk {{$produk->id}}</div>
        <div class="card-body">
            <h4> Nama Produk : {{$produk->nama_produk}}</h4>
            <h4> Keterangan Produk :{{$produk->keterangan}}</h4>
            <h4> Harga :{{$produk->harga}}</h4>
            <h4> Jumlah :{{$produk->jumlah}}</h4>
        </div>
    </div>
    @endsection
