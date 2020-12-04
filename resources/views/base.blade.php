<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">



    <title>Prototype Laravel 8</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Prototype</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#section-home">Accueil</a>
                    <a class="nav-item nav-link" href="#section-about">A propos</a>
                    <a class="nav-item nav-link" href="#proto-form">Contact</a>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')


    <footer id="copyrights">
        <p>&copy; Copyright Julien BASQUE 2020</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/js/bootstrap.js"></script>

</body>
</html>
