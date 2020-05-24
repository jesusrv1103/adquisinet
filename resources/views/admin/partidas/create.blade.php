<div style=" border-top-color: red;" class="modal fade" id="modal-crear-partida" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crear partida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.partidas.store') }}" method="POST">
                @csrf
                <div class="modal-body">    
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" class="form-control" placeholder="REFACCIONES Y ACCESORIOS MENORES DE EDIFICIOS" required>
                    </div>

                    <div class="form-group">
                        <label>Numero:</label>
                        <input type="number" name="numero" class="form-control" placeholder="2891" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
