<!-- Modal nuevo proyecto -->
<div class="modal fade" id="nuevoProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Proyecto</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controlador.php" method="POST" id="fni">

                    <div class=" form-floating">
                        <input type="text" class="form-control" name="id" placeholder="00001">
                        <label for="floatingInput">ID</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nombre" placeholder="Proyecto GIT-HUB">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="fechaInicio" placeholder="10/12/2014">
                        <label for="floatingInput">Fecha Inicio</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="fechaFinPrevista" placeholder="10/12/2015">
                        <label for="floatingInput">Fecha Fin Prevista</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="diasTranscurridos" placeholder="23">
                        <label for="floatingInput">Dias transcurridos</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="porcentajeCompletado" placeholder="50%">
                        <label for="floatingInput">Porcentaje Completado</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="importancia" placeholder="1-5">
                        <label for="floatingInput">Importancia</label>
                    </div>

                </form>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary" name="nuevoProyecto" form="fni">Añadir</button>
            </div>
        </div>
    </div>

    <!--Modal eliminar todos los proyectos-->
    <div class="modal fade" id="eliminarProyectos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar proyectos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="controlador.php" method="POST" id="fec">
                        <div class="form-group">
                            <label class="form-label">¿Estás seguro de borrar todos los proyectos?</label>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary" name="eliminarProyectos" form="fec">Sí</button>
                </div>
            </div>
        </div>
    </div>