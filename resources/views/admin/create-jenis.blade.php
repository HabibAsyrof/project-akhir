@extends('layout.master')
@section('css2')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
<div class="container">
    <form method="POST" action="/admin/create-jenis" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class=form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">nama</label><br>
            <input class="form-control" type="text" id="nama" name="nama">
            @error('nama')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">harga</label><br>
            <input class="form-control" type="number" id="harga" name="harga">
            @error('harga')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <textarea id="summernote" name="deskripsi"></textarea>

        <div class="mb-3">
            <label for="kondisi" class="form-label">kondisi</label><br>
            <label for="dropdown">Pilih opsi:</label>
            <select id="dropdown" name="kondisi" id="kondisi">
                <option value="NEW">NEW</option>
                <option value="SECOND">SECOND</option>
            </select>
            @error('deskripsi')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="memori">Pilihan Memori : </label>
            <input name="memori" id="memori" type="text">
        </div>

        <div class="mb-3">
            <label for="kategori_id">kategori : </label>
            <select name="kategori_id" id="kategori_id">
                @foreach ($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->series }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary" style="width: 100%;">Save</button>
    </form>
</div>
@endsection

@section('js2')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
<script>
 $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Tulis sesuatu...',
            tabsize: 2,
            height: 300
        });
    });
</script>
@endsection
