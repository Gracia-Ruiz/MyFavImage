@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row bg-seccondary text-white">
        <div class="col-12 col-md-6 offset-md-3">
            <h1>Nueva imagen</h1>
        </div>
        <div class="col-12 col-md-6 mx-auto">
            <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title') }}" name="title">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="file" value="{{ old('file') }}" name="file">
                    @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn-insert mb-5" type="submit"> Enviar</button>
            </form>
        </div>

    </div>
</div>
@endsection
