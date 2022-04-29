@extends('layouts.app')
@section('content')
<main>
    <div class="container mb-5">
        <div class="row mb-5">
            <div class="col-12 text-center mt-5 pt-5">
                <h1 class="fst-italic display-2 text-white mt-5 title-home"><i
                        class="fa-solid fa-camera-retro fst-italic"></i> <span class="text-accent">In</span>Shoot</h1>
                <h2 class="text-white fw-bold mt-5">Toda mi galería</h2>
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
