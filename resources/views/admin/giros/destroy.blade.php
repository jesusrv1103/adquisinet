<div class="modal fade" id="modal-destroy-{{$giro->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Eliminar giro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.giros.destroy',$giro->id) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <div class="modal-body">

                        <h4>¿Esta segúro que desea eliminar giro?</h4>

                    <!--/porlets-content-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
