<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Resoluciones</title>

    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


    <!-- Opcional: jQuery y Popper.js para ciertos componentes de Bootstrap como modales, tooltips, etc. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<section class="h-100 gradient-form">
    <div class="container my-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Listado de Datos</h2>
                <a href="{{ route('resol_tabla_dato_inm.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Agregar Nuevo Dato</a>
                <a href="{{ route('home') }}" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i> Volver al Inicio</a>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Tabla ID</th>
                        <th>Perdesde</th>
                        <th>Perhasta</th>
                        <th>Paramstr</th>
                        <th>Param1</th>
                        <th>Param2</th>
                        <th>Param3</th>
                        <th>Param4</th>
                        <th>Param5</th>
                        <th>Param6</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datos as $dato)
                        <tr>
                            <td>{{ $dato->tabla_id }}</td>
                            <td>{{ $dato->perdesde }}</td>
                            <td>{{ $dato->perhasta }}</td>
                            <td>{{ $dato->paramstr }}</td>
                            <td>{{ $dato->param1 }}</td>
                            <td>{{ $dato->param2 }}</td>
                            <td>{{ $dato->param3 }}</td>
                            <td>{{ $dato->param4 }}</td>
                            <td>{{ $dato->param5 }}</td>
                            <td>
                                <a href="{{ route('resol_tabla_dato_inm.edit', $dato->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('resol_tabla_dato_inm.destroy', $dato->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="alert alert-info mt-4" role="alert">
                    <p><strong>Nota:</strong> El valor de cada parámetro varía según el punto:</p>
                    <ul class="mb-3">
                        <li>
                            <strong>Obtengo Mínimo y Cantidad de años que liquida imp. Automotor:</strong>
                            <ul>
                                <li><code>paramstr</code> es la <strong>valMinimo</strong></li>
                                <li><code>param1</code> es el <strong>grupo</strong></li>
                                <li><code>param2</code> es <strong>perdesde</strong></li>
                                <li><code>param3</code> es <strong>hasta</strong></li>
                                <li><code>param4</code> es <strong>minimo</strong></li>
                                <li><code>param5</code> es el <strong>anio</strong></li>
                            </ul>
                        </li>
                        <li>
                            <strong>Básico:</strong>
                            <ul>
                                <li><code>param1</code> es el <strong>desde</strong></li>
                                <li><code>param2</code> es el <strong>hasta</strong></li>
                                <li><code>param3</code> es el <strong>fijo</strong></li>
                                <li><code>param4</code> es la <strong>alicuota</strong></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ route('simulacion.ejecutarRodado') }}" class="btn btn-success btn-sm mb-3"><i class="fas fa-play"></i> Ejecutar Simulación</a>
            </div>
        </div>
    </div>
</section>
</body>
</html>
