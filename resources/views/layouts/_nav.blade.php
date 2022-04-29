<header>
    <nav class="navbar navbar-expand-md navbar-dark py-3 shadow fixed-top bd-accent bg-nav" id="nav"
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
                        <a class="text-decoration-none badge box-radius links" href="{{ route('image.index') }}">Mis
                            imágenes</a>
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
                        <a type="button" class="mx-1 text-decoration-none badge links" href="{{ route('login') }}">
                            Login <i class="fas fa-user-check text-seccondary links"></i></a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="text-decoration-none badge box-radius links" href="{{ route('register') }}">
                            Register <i class="fas fa-user-plus text-seccondary links"></i></a>
                    </li>
                    @endguest
                    @auth
                    <li class="pt-1">{{ auth()->user()->name }}</li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent mx-1 fs-4" href="#">
                            <i class="fas fa-sign-out-alt pt-2 text-seccondary links"></i></button>
                    </form>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
