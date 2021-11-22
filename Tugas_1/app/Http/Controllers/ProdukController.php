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

    public function destroy($id) {
        $getProduk = Produk::find($id);
        $getProduk->delete();
        return redirect()->back();
    }
}
