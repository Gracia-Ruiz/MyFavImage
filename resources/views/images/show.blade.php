@extends('layouts.app')
@section('content')
<main>
    <div class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 text-center mt-5 pt-5">
                <h1 class="fst-italic display-2 text-white mt-5 title-home"><i
                        class="fa-solid fa-camera-retro fst-italic"></i> <span class="text-accent">In</span>Shoot</h1>
                <h2 class="text-white fw-bold mt-5">Detalle de la imagen</h2>
            </div>
        </div>
        <div class="col-12 py-2 d-flex justify-content-center">
            <div class="card bg-dark shadow border-0 text-white card-with">
                <h4 class="card-title text-center py-4">{{ $imgs->title }}</h4>
                <h5 class="card-title text-center">Creado el: {{ $imgs->created_at}} </h5>
                <img src="{{Storage::url($imgs->file)}}" class="img-height" alt="mis imágenes">
                <div class="card-body d-flex flex-column justify-content-around bg-main text-accent">
                    <a href="{{route('image.edit',['id'=>$imgs->id])}}" class="mx-auto btn btn-insert">Modificar</a>
                    <form action="{{route('image.destroy',['id'=>$imgs->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="mt-3 mx-auto d-block btn-destroy">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
