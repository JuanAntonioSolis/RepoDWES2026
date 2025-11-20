<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Técnicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h2>Técnicos</h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#nuevoTecnicoModal">
        Añadir
    </button>



    <div class="card text-center">
        @if ($tecnico->estado == 'libre')
            <div class="card-header">
                {{$tecnico->estado}}
            </div>
        @else
            <div class="card-header text-danger">
                {{$tecnico->estado}}
            </div>
        @endif
        <div class="card-body">
            <h5 class="card-title">{{$tecnico->nombre}} {{$tecnico->apellidos}} </h5>
            <h6 class="card-title">{{$tecnico->telefono}}</h6>
            <p class="card-text">{{$tecnico->email}}</p>

        </div>
    </div>

    <a href="{{route('tecnicos.index')}}" class="btn btn-primary mt-4 d-flex justify-content-center">Volver</a>

</div>

<!-- Modal -->
<div class="modal fade" id="nuevoTecnicoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo técnico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="nuevoTecnicoForm" action="{{route("tecnicos.store")}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Pelayo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Tofana Tarradellas">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="tel" class="form-control" name="telefono" placeholder="+34 690116691">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="pelayott@gmail.com">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" form="nuevoTecnicoForm" >Guardar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
