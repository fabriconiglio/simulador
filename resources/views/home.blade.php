<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Resoluciones</title>

    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/estilos.css') }}" rel="stylesheet">

    <!-- Opcional: jQuery y Popper.js para ciertos componentes de Bootstrap como modales, tooltips, etc. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/escudo-muni.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        Municipalidad de Cordoba
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100"> <!-- Centrar vertical y horizontalmente -->
        <!-- Botones -->
        <div class="container-fluid h-100">
            <div class="row justify-content-center align-items-center h-100"> <!-- Centrar vertical y horizontalmente -->
                <!-- Botones -->
                <div class="text-center mt-3"> <!-- Centrar horizontalmente y añadir espacio superior -->
                    <a class="btn btn-primary btn-block nav-link active mb-3" href="{{ route('resol_tabla_dato_rod.index') }}">
                        <span data-feather="home"></span> EMISION_ROD
                    </a>
                    <a class="btn btn-primary btn-block nav-link active" href="{{ route('resol_tabla_dato_inm.index') }}">
                        <span data-feather="home"></span> EMISION_INM
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
