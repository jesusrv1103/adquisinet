<div style=" border-top-color: red;" class="modal fade" id="modal-crear-mensaje" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  panel-heading">
        <div class="modal-content panel panel-primary">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Crear mensaje</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                
            </div>
            <form action="{{ route('admin.mensajes.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <h5>Selecciona el correo:</h5>
                        <div class=" col-lg-10">
                            <select class="form-control kt-select2" id="kt_select2_1" name="user_id">
                                @foreach ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">
                                    {{$usuario->email}}
                                </option>
                                @endforeach
                            </select>
                            Por favor selecciona un correo
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label>Mensaje:</label>
                        <input name="mensaje" class="form-control required" placeholder="Ingresa el mensaje" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>