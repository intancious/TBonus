@extends('adminlte.master')

@section('content')
<div class="container">
    <h2>Edit Data Produk {{$produk->id}}</h2>
    <form action="/produk/{{$produk->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}" id="nama"
                placeholder="Masukkan nama">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan Produk</label>
            <input type="text" class="form-control" name="keterangan" value="{{$produk->keterangan}}" id="keterangan"
                placeholder="Masukkan keterangan">
            @error('keterangan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jumlah">Harga</label>
            <input type="text" class="form-control" name="harga" value="{{$produk->harga}}" id="harga"
                placeholder="Masukkan Harga">
            @error('harga')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" value="{{$produk->jumlah}}" id="jumlah"
                placeholder="Masukkan Jumlah">
            @error('jumlah')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
