<div class="modal fade" id="modal-edit-{{$giro->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar giro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.giros.update',$giro->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" value="{{ $giro->nombre }}" class="form-control" placeholder="Papeleria y utiles de oficina">
                    </div>

                    <div class="form-group">
                        <label>Tiempo de entrega en dias:</label>
                        <input name="tiempo_entrega" value="{{ $giro->tiempo_entrega }}" class="form-control" placeholder="4">
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
