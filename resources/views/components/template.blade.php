<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Movies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('movies') ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('actors') ? 'active' : '' }}" href="{{ route('actors') }}">Actors</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('directors') ? 'active' : '' }}" href="{{ route('directors') }}">Directors</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                </ul>
                <i class="ms-2 fas fa-moon" id="icon"></i>
            </div>
        </div>
    </nav>
    <div class="container my-3">
        @yield('main-content')
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <h3 class="text-center text-white pt-4">Footer</h3>
            </div>
        </div>
        <?php
            use Carbon\Carbon;
            $date = Carbon::now();
            $date = $date->format('Y');
        ?>
        <div class="row d-flex justify-content-center align-items-center" style="margin: 0;">
            <p class="copyright-section">&copy; Movies <?php echo $date ?> - Created by <a class="copyright-link" href="#">Luca Pandolfelli</a></p>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>