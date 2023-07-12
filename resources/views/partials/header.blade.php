<header>
    {{-- other links bar --}}
    <div id="header-other-links" class="container-header-box-fluid">
        <div class="px-5 py-1 container-header-box">
            <span class="mx-5">DC POWER VISA ®</span>
            <label for="ads">ADDITIONAL DC SITES</label>
            <select name="ADDITIONAL DC SITES" id="ads"></select>
        </div>
    </div>
    {{-- navbar da bootstrap --}}
    <div id="header-navbar" class="container-header-box-fluid">
        <div class="px-5 py-1 container-header-box">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC" width="30"
                            height="24">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">COMICS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">MOVIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">TV</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">GAMES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">COLLECTIBLES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">VIDEOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FANS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NEWS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input id="search-bar" class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    </div>
    {{-- jumbotron/hero  --}}
    <div id="jumbotron">

    </div>
</header>
