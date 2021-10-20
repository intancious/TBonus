@extends('adminlte.master')

@section('content')
<div class="container">
    <a href="/produk/create" class="btn btn-primary my-3">Tambah Produk</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col" style="inline">Actions</th>
        </thead>
        <tbody>
            @forelse ($produk as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                    {{--
                <td>{{$value->id}}</td> --}}
                <td>{{$value->nama_produk}}</td>
                <td>{{$value->keterangan}}</td>
                <td>{{$value->harga}}</td>
                <td>{{$value->jumlah}}</td>
                <td>
                    <a href="/produk/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/produk/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/produk/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" name="delet" value="Delete">

                    </form>
                </td>
            </tr>
            @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
