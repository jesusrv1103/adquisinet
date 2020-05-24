<div class="modal fade" id="modal-edit-{{$partida->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar partida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form action="{{ route('admin.partidas.update',$partida->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" value="{{ $partida->nombre }}" class="form-control" placeholder="REFACCIONES Y ACCESORIOS MENORES DE EDIFICIOS">
                    </div>

                    <div class="form-group">
                        <label>Numero:</label>
                        <input name="numero" value="{{ $partida->numero }}" class="form-control" placeholder="2896">
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
