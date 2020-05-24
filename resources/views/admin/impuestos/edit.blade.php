<div class="modal fade" id="modal-edit-{{$impuesto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Editar giro</h4>
            </div>
            <form action="{{ route('admin.impuestos.update',$impuesto->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" value="{{ $impuesto->nombre }}" class="form-control"
                            placeholder="Papeleria y utiles de oficina">
                    </div>

                    <div class="form-group">
                        <label>Porcentaje:</label>
                        <input name="porcentaje" value="{{ $impuesto->porcentaje }}" class="form-control"
                            placeholder="4">
                    </div>

                    <div class="form-group">
                        <label>DECIMAL:</label>
                        <input name="decimal" value="{{ $impuesto->decimal }}" class="form-control"
                            placeholder="4">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
