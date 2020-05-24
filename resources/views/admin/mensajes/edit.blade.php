<div class="modal fade" id="modal-edit-{{$mensaje->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar marca</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.mensajes.update',$mensaje->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="name" value="{{ $mensaje->name }}" class="form-control" placeholder="mensaje">
                    </div>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="email" value="{{ $mensaje->email }}" class="form-control" placeholder="Correo">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Estado:</label>
                        <div class="col-sm-6 row">
                            <input type="radio" name="estado" id="optionsRadios1" value="activado"
                                 
                                {{ $mensaje->estado == 'activado' ? 'checked' : '' }}>Activado
                                
                            <input type="radio" name="estado" id="optionsRadios2" value="desactivado"
                            {{ $mensaje->estado == 'desactivado' ? 'checked' : '' }} >Desactivado
                        </div>
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
