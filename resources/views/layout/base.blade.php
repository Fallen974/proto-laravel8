<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/prototype.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">



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
                <div class="navbar-nav ml-auto menu-items">
                    <a class="nav-item nav-link" href="#section-home">Accueil</a>
                    <a class="nav-item nav-link" href="#section-about">A propos</a>
                    <a class="nav-item nav-link" href="#proto-form">Contact</a>
                    <a class="nav-item nav-link" href="/backend">Espace Admin</a>
                </div>
            </div>
        </nav>

    </header>

    <div class="container clearfix">
        @yield('content')
    </div>



    <footer id="copyrights">
        <p>&copy; Copyright Julien BASQUE 2020</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/js/bootstrap.js"></script>

</body>
</html>