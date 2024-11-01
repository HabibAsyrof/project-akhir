@extends('layout.app')
@section('title', 'detail')

@section('css')
<link rel="stylesheet" href="/css/halaman-utama.css">
<link rel="stylesheet" href="/css/search.css">
@endsection
@section('content')
<div class="container-halaman-utama">
    <div class="navbar">
        <x-navbar :kategori="$kategori" />
    </div>
    <x-search />
    @foreach ($jenis as $item)
    <div class="content1 detail">
        <img src="{{asset('storage/' .$item->image) }}" alt="">
    </div>
    <div class="isi detail">
        <div class="harga detail">
            <p>{{$item->nama}} - {{$item->kondisi}}</p>
            <p class="rp">Rp.{{$item->harga}}</p>
        </div>
        <div class="spek">
            <p>{!! $item->deskripsi !!}</p>
        </div>
    </div>
    <button class="button-beli detail" type="submit"><a href="">beli</a></button> 
    @endforeach
</div>
@endsection