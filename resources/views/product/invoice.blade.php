@extends('layouts.master')
@section('title', 'Invoice Page')

@section('content')
    <div class="container mt-5">
        <div class="card mx-auto" style="width: 50rem;">
            <div class="card-header text-center">
                <h3>Invoice Transaksi</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Detail Transaksi</h5>
                        <p class="card-text">No. Invoice: {{ rand(100000000, 999999999) }}</p>
                        <p class="card-text">Admin Fee: Rp. 2500</p>
                        <p class="card-text">Kode Unik: {{ rand(1, 99) }}</p>
                        <p class="card-text">Total: Rp. {{ number_format(2500 + $product->price, 0, ',', '.') }}</p>
                        <p class="card-text">Metode Pembayaran: VA BRI</p>
                        <p class="card-text">Status: <span class="badge bg-danger">UNPAID</span></p>
                        <p class="card-text">Tanggal Kadaluwarsa: {{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d H:i:s') }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="card-title">Produk yang Dibeli</h5>
                        <div class="d-flex">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded" style="height: 200px; width: 200px;">
                            <div class="ms-4">
                                <h6 class="card-title">{{ $product->name }}</h6>
                                <p class="card-text">Stok: {{ $product->stock }}</p>
                                <p class="card-text">Kondisi: {{ $product->condition }}</p>
                                <p class="card-text">Harga: Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                <p class="card-text">Berat: {{ $product->weight }} gr</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
