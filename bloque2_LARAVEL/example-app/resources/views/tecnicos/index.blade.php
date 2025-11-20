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



    <table class="table table-bordered">
        <thead>
        <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Email</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>

        </tr>
        </thead>
        <tbody>
        @foreach($tecnicos as $tecnico)
            <tr>
                <td>{{$tecnico->nombre}}</td>
                <td>{{$tecnico->apellidos}}</td>
                <td>{{$tecnico->telefono}}</td>
                <td>{{$tecnico->email}}</td>
                <td>
                    @if ($tecnico->estado == 'libre')
                        <span class="text-success">{{$tecnico->estado}}</span>
                    @else
                        <span class="text-danger">{{$tecnico->estado}}</span>
                    @endif
                </td>

                <td>
                    <form action="{{route('tecnicos.destroy',$tecnico->id)}}"  method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger mt-2">Eliminar</button>
                    </form>
                    <a href="{{route('tecnicos.show',$tecnico->id)}}" class="btn btn-outline-success mt-2">Ver</a>

                </td>


            </tr>
        @endforeach
        </tbody>
    </table>

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
