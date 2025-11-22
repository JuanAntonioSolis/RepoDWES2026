<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h2>Incidencias</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#nuevaIncidenciaModal">
        Añadir
    </button>


    <div class="card text-center">
        <div class="card-header">
            {{$incidencia->estado}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$incidencia->ciudad}}</h5>
            <h6 class="card-title">{{$incidencia->direccion}}</h6>
            <p class="card-text">{{$incidencia->descripcion}}</p>
            <img src="{{asset("storage/" .$incidencia->imagen)}}">

        </div>
        <div class="card-footer text-body-secondary">
            {{$incidencia->created_at}}
        </div>
    </div>


    <a href="{{route('incidencias.index')}}" class="btn btn-primary mt-4 d-flex justify-content-center">Volver</a>

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
                <form method="POST" id="nuevaIncidenciaForm" action="{{route("incidencias.store")}}"
                      enctype="multipart/form-data">
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
                    <div class="mb-3">
                        <label class="form-label">Imagen</label>
                        <input type="file" name="imagen" >
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" form="nuevaIncidenciaForm">Guardar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>
