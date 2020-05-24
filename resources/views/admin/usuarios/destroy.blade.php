<div class="modal fade" id="modal-destroy-{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" id="myModalLabel">Eliminar usuario</h4>
            </div>
            <form action="{{ route('admin.usuarios.destroy',$usuario->id) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <div class="modal-body">
                        <h4>¿Esta segúro que desea eliminar usuario?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
