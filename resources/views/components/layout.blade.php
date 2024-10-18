
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/layout_css.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">PORTFOLIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('projects') || Request::is('lab1') || Request::is('lab2') || Request::is('lab3') || Request::is('lab4') ? 'active' : '' }}" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    @yield('content')
    <!-- JS Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
