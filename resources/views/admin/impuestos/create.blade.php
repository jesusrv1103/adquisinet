<div style=" border-top-color: red;" class="modal fade" id="modal-crear-impuesto" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Crear impuesto</h4>
            </div>
            <form action="{{ route('admin.impuestos.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" class="form-control" placeholder="IVA">
                    </div>

                    <div class="form-group">
                        <label>Porcentaje:</label>
                        <input name="porcentaje" class="form-control" placeholder="16">
                    </div>

                    <div class="form-group">
                        <label>Decimal:</label>
                        <input name="decimal" class="form-control" placeholder="0.16">
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
