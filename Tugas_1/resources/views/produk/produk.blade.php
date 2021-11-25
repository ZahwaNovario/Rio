@extends('main.master')
@section('content-main')
    <table class="table table-hover text-nowrap">
        <tr>
            <td>Nomor</td>
            <td>Nama Produk</td>
            <td>Deskripsi</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Aksi</td>
        </tr>

        @foreach ($getProduk as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->namaproduk }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                    <a href="{{ route('editProduk', $item->id) }}" class="btn btn-light btn-sm btn-flat">
                         Edit
                    </a>
                    <a href="{{ route('hapusProduk', $item->id) }}" class="btn btn-danger btn-sm btn-flat">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection