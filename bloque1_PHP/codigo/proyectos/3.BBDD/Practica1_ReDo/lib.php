<!-- Modal nueva incidencia -->
<div class="modal" tabindex="-1" id="crear">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva incidencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controlador.php?accion=crear" method="POST" id="fni">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="titulo" placeholder="Cafetera no funciona">
                        <label for="floatingInput">Título</label>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="tipo" placeholder="Hardware,Software, Red, Otros">
                        <label for="floatingInput">Tipo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="prioridad"
                            placeholder="Baja, Media, Alta, Crítica">
                        <label for="floatingInput">Prioridad</label>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" form="fni" name="crear">Crear</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal eliminar incidencia -->
<div class="modal" tabindex="-1" id="eliminarIncidencia">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar incidencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="controlador.php?accion=eliminarIncidencia" method="POST" id="fei">

                    <p>¿Seguro que quieres eliminar esta incidencia?</p>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" form="fei" name="eliminarIncidencia">Eliminar</button>


                </form>
            </div>
        </div>
    </div>
</div>