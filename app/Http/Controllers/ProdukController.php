<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.table', compact('produk')); //compact = $ variabel yg didefinisikan
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        Produk::create([
            "nama_produk" => $request->nama_produk,
            "keterangan" => $request->keterangan,
            "harga" => $request->harga,
            "jumlah" => $request->jumlah
        ]);
        return redirect('/produk');
    }


    public function show($id)
    {
        $produk = Produk::find($id);
        return view('produk.show', compact('produk'));
    }


    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $produk = Produk::find($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->keterangan = $request->keterangan;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;
        $produk->update();
        return redirect('/produk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk = delete();
        return redirect('/produk');
    }
}
