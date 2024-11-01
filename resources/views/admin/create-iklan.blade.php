@extends('layout.master')

@section('content')
<div class="container">
    <form method="POST" action="/admin/create-iklan" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Image</label><br>  
                <input class="form-control" type="file" id="formFile" name="image">
            @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%;">Save</button>
    </form>
</div>
@endsection