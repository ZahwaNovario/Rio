@extends('main.master')
@section('content-main')
    <form method="POST" action="{{route('updateProduk', $getProduk->id)}}">
        @csrf
        <div class="mb-3">
            <label for="namaproduk" class="form-label">NamaProduk</label>
            <input value="{{$getProduk->namaproduk}}" name="namaproduk" type="text" class="form-control" id="namaproduk" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input value="{{$getProduk->deskripsi}}" name="deskripsi" type="text" class="form-control" id="deskripsi">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input value="{{$getProduk->harga}}" name="harga" type="number" class="form-control" id="harga">
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input value="{{$getProduk->jumlah}}" name="jumlah" type="number" class="form-control" id="jumlah">
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection