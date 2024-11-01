@extends('layout.app')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="css/halaman-utama.css">
    <link rel="stylesheet" href="css/search.css">
@endsection

@section('content')
    <div class="container-halaman-utama">
        <div class="navbar">
            <x-navbar></x-navbar>
        </div>
        <x-search />
        <div class="iklan">
            <div class="slider">
                <div class="slides">
                    @foreach ($iklan as $item)
                        <div class="slide animasi-cuy"><img src="{{ asset('storage/' . $item->image) }}" alt="Image 2">
                        </div>
                    @endforeach
                </div>
                <button id="button-slide" class="prev animasi-cuy" onclick="prevSlide()">&#10094;</button>
                <button id="button-slide" class="next animasi-cuy" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>

        <div class="judul-hp">
            <div class="fakmen">Kategori Pilihan <i class="fa-solid fa-bolt"></i></div>
            <div class="nama-hp">
                @foreach ($kategori as $item)
                    <a class="jenishp" href="/halaman-iphone/{{ $item->id }}">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="gambar">
                        <div class="nama">
                            <p>{{ $item->series }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>


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
                    <button class="button-beli" type="submit">detail</button>
                </div>
            @endforeach
        </div>

    @section('js')
        <script src="js/sidebar.js"></script>
        <script src="js/script.js"></script>
    @endsection
