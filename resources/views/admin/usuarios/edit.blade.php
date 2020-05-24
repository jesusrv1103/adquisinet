<div class="modal fade" id="modal-edit-{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.usuarios.update',$usuario->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="name" value="{{ $usuario->name }}" class="form-control" placeholder="Usuario">                   
                        
                    </div>
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="email" name="email" value="{{ $usuario->email }}" class="form-control" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input name="password" value="{{ $usuario->password }}" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Estado:</label>
                        <div class="col-sm-6 row">
                            <input type="radio" name="estado" id="optionsRadios1" value="activado"
                                 
                                {{ $usuario->estado == 'activado' ? 'checked' : '' }}>Activado
                                
                            <input type="radio" name="estado" id="optionsRadios2" value="desactivado"
                            {{ $usuario->estado == 'desactivado' ? 'checked' : '' }} >Desactivado
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
