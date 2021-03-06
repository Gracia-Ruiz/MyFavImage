@extends('layouts.app')
@section('content')
<main>
    <div class="container-fluid mb-5 pb-5 bg-head">
        <div class="row mb-5">
            <div class="col-12 col-md-6 mx-auto text-center mt-5 pt-5">
                <h1 class="fst-italic display-2 text-white mt-5 title-home"><i
                        class="fa-solid fa-camera-retro fst-italic"></i> <span class="text-accent">In</span>Shoot</h1>
                <h2 class="text-white fw-bold">Mis imágenes favoritas</h2>
                <a class="btn btn-insert mt-5" href="{{ route('image.create') }}">
                    <lord-icon src="https://cdn.lordicon.com/diyeocup.json" trigger="loop" class="icon-btn">
                    </lord-icon> Nueva imagen
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 text-center text-white">
                <h2 class="display-5 py-3 d-inline">Las imágenes más recientes</h2>
            </div>
            @foreach ($imgs as $img)
            <div class="col-12 col-md-3 py-2 d-flex justify-content-center">
                <div class="card bg-dark shadow border-0 text-white card-with">
                    <h5 class="card-title text-center py-4">{{ $img->title }}</h5>
                    <img src="{{Storage::url($img->file)}}" class="img-height" alt="mis imágenes">
                    <div class="card-body d-flex flex-column justify-content-around bg-main text-accent">
                        <a href="{{route('image.show', $img->id)}}"
                            class="btn mx-auto my-4 btn-insert links">Detalle</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</main>
@endsection
