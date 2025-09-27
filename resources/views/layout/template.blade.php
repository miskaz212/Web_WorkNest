<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkNest - @yield('title', 'Website')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Adjust this value based on your navbar height */
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .nav-link-hover {
            color: transparent;
            transition: color 0.3s ease;
        }
        .nav-link.active:hover {
        color: #ff5722;
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
    }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarSupportedContent">

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
        <a class="navbar-brand" href=" ">
            <img src="/images/home/LOGO.jpg" alt="Worknest Logo" width="30" height="30" class="d-inline-block align-top" style="margin-right: 10px;">
            <span style="color: #ff5722;"><strong>WORKNEST</strong></span>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-5 mb-lg-0">
    @if (!Auth::check())
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"><strong>Home</strong></a>
        </li>
    @endif

    @auth
            <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="/manager/homepage"><strong>Home</strong></a>
            </li>
    @endauth

    @auth
        @if (auth()->user()->role == 'admin')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-clipboard-plus-fill"></i> Tambahkan info
            </a>
            <ul class="dropdown-menu">
                <li class="nav-item">
                <a class="nav-link active" href="/lokers/create">
                    <i class="bi bi-briefcase-fill"></i>
                    <strong>Info Loker</strong></a>
            </li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-floppy"></i> Lihat Data
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link active" href="/lokers/data">
                        <i class="bi bi-briefcase-fill"></i>
                        <strong>Data Loker</strong></a>
                </li>
                <li>
                    <a class="nav-link active" href="/pekerja/datapekerja">
                        <i class="bi bi-person-lines-fill"></i>
                        <strong>Data Pekerja</strong></a>
                </li>
            </ul>
        </li>
        @endif
    @endauth

    @auth
        @if (auth()->user()->role == 'user')
            {{-- <li class="nav-item">
                <a class="nav-link" href="/pekerja/create/{id}">Input Movie</a>
            </li> --}}
            <li>
                <a class="nav-link active " href="/pekerja/datapekerja"><strong>Data Pekerja</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="/contact"><strong>Laporkan</strong></a>
            </li>
        @endif
    @endauth

    @guest
        <!-- Only show "About" and "Contact" links for guests (not logged in) -->
        <li class="nav-item">
            <a class="nav-link active" href="/about"><strong>About</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/contact"><i class="bi bi-headset"></i> <strong>Contact</strong></a>
        </li>
    @endguest
</ul>
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            {{-- <form action="/manager/homepage" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form> --}}

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-workspace"></i> | {{ auth()->user()->name }}
                        </a>
                    <ul class="dropdown-menu">
                        <form action="/logout" method="post">
                @csrf
                            <li>
                                <button type="submit" class="dropdown-item"><i class="bi bi-door-closed"></i> Logout</button>
                            </li>
                        </form>
                    </ul>
                    </li>
                @else
                    <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="bi bi-door-open"></i> Masuk</a>
                    </li>
                @endauth
</ul>
            </ul>
        </div>
        </div>
    </nav>


    <div class="container my-2">
        @yield('content')
    </div>

    <footer class="bg-dark text-center text-white py-2">
        Copyright &copy; 2023 by Dini Dama Yanti
    </footer>

    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
