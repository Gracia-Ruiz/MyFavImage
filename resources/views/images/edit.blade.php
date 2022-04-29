@extends('layouts.app')
@section('content')
<main class="container my-5 py-5">
<div class="row">
    <div class="col-12 col-md-6 mx-auto text-white fs-3 text-center">
        <form method="POST" action="{{route('image.update',['id'=>$imgs->id])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="editTitle" aria-describedby="title"
                    name="title" value="{{old('title') ?? $imgs->title}}">
                @error('title')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <img src="{{Storage::url($imgs->file)}}" alt="" class="img-fluid">
                <label for="file" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="editFile" name="file">
                @error('file')
                {{$message}}
                @enderror
            </div>
            <button type="submit" class="btn btn-insert">Modificar</button>
        </form>
    </div>
</div>
</main>
@endsection
