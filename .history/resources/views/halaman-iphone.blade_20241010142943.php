@extends('layout.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="/css/halaman-utama.css">
    <link rel="stylesheet" href="/css/search.css">
@endsection
@section('content')
    <div class="container-halaman-utama">
        <div class="navbar">
            <x-navbar / >
        </div>
        <x-search /> 
        <div class="serahbiblah">
            @foreach ($jenis as $item)
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
                    <button class="button-beli" type="submit">beli</button>
                </div>
            @endforeach
        </div>

    @section('js')
        <script src="/js/sidebar.js"></script>
        <script src="/js/script.js"></script>
    @endsection
