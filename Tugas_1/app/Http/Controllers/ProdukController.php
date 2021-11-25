<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        // laravel eloquent
        $getProduk = Produk::all();
        // dd($getProduk);
        return view('produk.produk', compact('getProduk'));
    }

    public function create() {
        return view('produk.tambah_produk');
    }

    public function store(Request $request) {
        // eloquent
        $produk = new Produk();
        $produk->namaproduk = $request->namaproduk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;
        $produk->save();

        // mass assigment

        return redirect()->back();
    }

    public function destroy($id) {
        $getProduk = Produk::find($id);
        $getProduk->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $getProduk = Produk::find($id);
        return view('produk.edit_produk', [
            'getProduk' => $getProduk,
        ]);
    }

    public function update($id, Request $request) {
        $produk = Produk::find($id);
        $produk->namaproduk = $request->namaproduk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;
        $produk->save();

        return redirect()->route('produk');
    }
}
