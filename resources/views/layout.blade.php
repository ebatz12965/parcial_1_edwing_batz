<!DOCTYPE html>
<html>
<head>
    <title>Parcial 1-PrograIII @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Agregar la hoja de estilo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Agregar los archivos de JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PARCIAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pagina1">PAGINA 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pagina2">PAGINA 2</a>
                </li>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
    @section('sidebar')
        <p>Texto de la vista principal</p>
    @show
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>

