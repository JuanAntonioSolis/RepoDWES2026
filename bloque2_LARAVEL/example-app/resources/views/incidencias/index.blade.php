<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h2>Incidencias</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#nuevaIncidenciaModal">
        Añadir
    </button>



    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Latitud</th>
            <th scope="col">Longitud</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Direccion</th>
            <th scope="col">Estado</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>

        </tr>
        </thead>
        <tbody>
        @foreach($incidencias as $incidencia)
            <tr>
                <td>{{$incidencia->id}}</td>
                <td>{{$incidencia->latitud}}</td>
                <td>{{$incidencia->longitud}}</td>
                <td>{{$incidencia->ciudad}}</td>
                <td>{{$incidencia->direccion}}</td>
                <td>{{$incidencia->estado}}</td>
                <td>{{$incidencia->descripcion}}</td>
                <td>
                    <a href="{{route('incidencias.delete',$incidencia->id)}}" class="btn btn-danger">Eliminar</a>
                    <a href="{{route('incidencias.show',$incidencia->id)}}" class="btn btn-success mt-2">Ver</a>

                </td>


            </tr>
        @endforeach
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="nuevaIncidenciaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva incidencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="nuevaIncidenciaForm" action="{{route("incidencias.store")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Latitud</label>
                        <input type="text" class="form-control" name="latitud" placeholder="101.123123">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Longitud</label>
                        <input type="text" class="form-control" name="longitud" placeholder="101.123123">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" placeholder="Almeria">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Calle Angustias 3">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion</label>
                        <textarea name="descripcion" class="form-control" cols="30" rows="10"></textarea>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" form="nuevaIncidenciaForm" >Guardar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
