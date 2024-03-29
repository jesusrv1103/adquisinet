<div class="modal fade" id="modal-edit-{{$marca->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Marca</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.marcas.update',$marca->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" value="{{ $marca->nombre }}" class="form-control" placeholder="Papeleria y utiles de oficina">
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
