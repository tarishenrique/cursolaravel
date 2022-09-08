<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="public/css/styles.css" rel="stylesheet">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collase navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"></a>
                <img src="/img/" alt="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>

            </div>
        </nav>


    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg"> {{ session('msg') }} </p>
                @endif
                @yield('content')
            </div>
        </div>

    </main>

    <footer>
        <p>Taris Henrique &copy; 2022</p>
    </footer>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</body>
</html>