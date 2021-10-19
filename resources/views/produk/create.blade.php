@extends('adminlte.master')

@section('content')

<div class="container">
    <h2>Tambah Data</h2>
    <form action="/produk" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" id="nama" placeholder="Masukkan nama">
            @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan Produk</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan keterangan">
            @error('keterangan')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan harga">
            @error('harga')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah">
            @error('jumlah')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
