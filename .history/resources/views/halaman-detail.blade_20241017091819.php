@extends('layout.app')
@section('title', 'detail')

@section('css')
    <link rel="stylesheet" href="/css/halaman-utama.css">
    <link rel="stylesheet" href="/css/search.css">
@endsection
@section('content')
<div class="serahbiblah">
    @foreach ($pantek as $item)
        <div class="hp">
            <div class="jenishp1">
                <img src="{{ asset('storage/' . $item->image) }}" alt="gambar">
            </div>
            <div class="jenishp11">
                <div class="nama">
                    <p>{{ $item->nama }}</p>
                </div>
                <div class="harga">
                    <h1>Rp.{{ $item->harga }}</h1>
                </div>
            </div>
            <button class="button-beli" type="submit"><a href="/halaman-detail">detail</a></button>
        </div>
    @endforeach
</div>
@endsection