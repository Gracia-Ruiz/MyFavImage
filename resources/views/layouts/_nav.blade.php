<header>
    <nav class="navbar navbar-expand-md navbar-dark py-3 shadow sticky-top bd-accent bg-nav" id="nav"
        aria-label="Fourth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand fst-italic fs-3 logo" href="{{ route('welcome') }}">
                <i class="fa-solid fa-camera-retro fst-italic"></i><span class="text-accent"> In</span>Shoot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mx-auto mb-2 mb-md-0 fs-4">
                    <li class="nav-item">
                        <a class="text-decoration-none badge box-radius links" href="#">Mis imágenes</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="mx-3 text-decoration-none badge box-radius links" href="{{ route('image.create') }}">
                            <lord-icon src="https://cdn.lordicon.com/mecwbjnp.json" trigger="loop">
                            </lord-icon> Nueva Imagen
                        </a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a type="button" class="mx-1 fs-2" href="{{ route('login') }}">
                            <i class="fas fa-user-check text-seccondary links"></i></a>
                    </li>
                    <li>
                        <a type="button" class="mx-1 fs-2" href="{{ route('register') }}">
                            <i class="fas fa-user-plus text-seccondary links"></i></a>
                    </li>
                    @endguest
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent mx-1 fs-4" href="#">
                            <i class="fas fa-sign-out-alt text-seccondary links"></i></button>
                    </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
