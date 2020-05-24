<div style=" border-top-color: red;" class="modal fade" id="modal-crear-unidades" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crear usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.unidades.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" class="form-control required" placeholder="HERDEX">
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
<div style=" border-top-color: red;" class="modal fade" id="modal-crear-usuario" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crear usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.usuarios.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="name" class="form-control required" placeholder="Nombre de Usuario" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Correo:</label>
                        <input type="email" name="email" class="form-control required" placeholder="Correo electronico" required> 
                        @if ($errors->has('email'))
                            <small class="form-text text-danger">
                                {{ $errors->first('email') }}
                            </small>
                        @endif
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input name="password" class="form-control required" placeholder="Contraseña" required>
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
