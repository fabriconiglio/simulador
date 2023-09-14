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
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container">
        <h2>Editar Dato</h2>
        <form action="{{ route('resol_tabla_dato_inm.update', $dato->id) }}" method="POST">
        @csrf
            @method('PUT')
            <!-- Aquí irían los campos del formulario, por ejemplo: -->
            <div class="form-group">
                <label for="tabla_id">Tabla ID</label>
                <input type="text" name="tabla_id" class="form-control" value="{{ $dato->tabla_id }}">
            </div>

            <div class="form-group">
                <label for="perdesde">Período Desde</label>
                <input type="text" name="perdesde" class="form-control" value="{{ $dato->perdesde }}">
            </div>

            <div class="form-group">
                <label for="perhasta">Período Hasta</label>
                <input type="text" name="perhasta" class="form-control" value="{{ $dato->perhasta }}">
            </div>

            <div class="form-group">
                <label for="paramstr">Param String</label>
                <input type="text" name="paramstr" class="form-control" value="{{ $dato->paramstr }}">
            </div>

            <div class="form-group">
                <label for="param1">Parámetro 1</label>
                <input type="text" name="param1" class="form-control" value="{{ $dato->param1 }}">
            </div>

            <div class="form-group">
                <label for="param2">Parámetro 2</label>
                <input type="text" name="param2" class="form-control" value="{{ $dato->param2 }}">
            </div>

            <div class="form-group">
                <label for="param3">Parámetro 3</label>
                <input type="text" name="param3" class="form-control" value="{{ $dato->param3 }}">
            </div>

            <div class="form-group">
                <label for="param4">Parámetro 4</label>
                <input type="text" name="param4" class="form-control" value="{{ $dato->param4 }}">
            </div>

            <div class="form-group">
                <label for="param5">Parámetro 5</label>
                <input type="text" name="param5" class="form-control" value="{{ $dato->param5 }}">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
            <a href="{{ route('resol_tabla_dato_inm.index') }}" class="btn btn-danger mt-4">Cancelar</a>
        </form>
    </div>
</section>
</body>
</html>
