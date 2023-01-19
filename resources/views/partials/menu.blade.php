<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="li-nav">
            <a href="{{ route('home') }}">
                HOME
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item li-nav">
                    <a class="nav-link active" aria-current="page" href="">CHARACTERS</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="{{ route('comics.index') }}">COMICS</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">MOVIES</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">TV</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">GAMES</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">COLLECTIBLES</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">VIDEOS</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">FANS</a>
                </li>
                <li class="nav-item li-nav">
                    <a class="nav-link" href="#">NEWS</a>
                </li>
                <li class="nav-item dropdown li-nav">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        SHOP
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
