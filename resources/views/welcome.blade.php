@extends('layouts.app')
@section('content')
<main class="container-fluid mb-5 pb-5 bg-head">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto text-center">
            <h1 class="fst-italic display-2 text-white mt-5 title-home"><i class="fa-solid fa-camera-retro fst-italic"></i> <span
                    class="text-accent">In</span>Shoot</h1>
            <h2 class="text-white fw-bold">Mis imágenes favoritas</h2>
            <a class="btn btn-insert mt-5" href="{{ route('image.create') }}">
                <lord-icon src="https://cdn.lordicon.com/diyeocup.json" trigger="loop"
                    class="icon-btn">
                </lord-icon> Nueva imagen
            </a>
        </div>
    </div>
</main>
</header>
<div style="margin-top:2000px;"></div>
@endsection
