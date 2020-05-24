<div class="modal fade" id="view-proveedores-{{$proveedor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detalles del proveedor: {{$proveedor->nombre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center><img src="/images/{{$proveedor->img_cedula}}" width="300px"><br>Imagen de la cédula</center>
      <label><h6>Nombre: &nbsp;</h6></label>{{$proveedor->nombre}} <br>
      <label><h6>Razón Social: &nbsp;</h6></label>{{$proveedor->razon_social}} <br>
      <label><h6>RFC: &nbsp;</h6></label>{{$proveedor->rfc}} <br>
      <label><h6>Cédula: &nbsp;</h6></label>{{$proveedor->cedula}} <br>
      <label><h6>Tipo Persona: &nbsp;</h6></label>{{$proveedor->tipo_persona}} <br>
      <label><h6>Domicilio: &nbsp;</h6></label>{{$proveedor->domicilio}} <br>
      <label><h6>Teléfono: &nbsp;</h6></label>{{$proveedor->telefono}} <br>
      <label><h6>Estado: &nbsp;</h6></label>{{$proveedor->estado}} <br>
      <label><h6>Contacto: &nbsp;</h6></label>{{$proveedor->contacto}} <br>
      <label><h6>Representante legal: &nbsp;</h6></label>{{$proveedor->representante_legal}} <br>
      <label><h6>Capital Contable: &nbsp;</h6></label>{{$proveedor->capital_contable}} <br>
      <label><h6>Fecha de Vigencia Cédula: &nbsp;</h6></label>{{$proveedor->fecha_vigencia_cedula}} <br>
      <label><h6>Imágen de Cédula: &nbsp;</h6></label>{{$proveedor->img_cedula}} <br>
      <label><h6>Correo: &nbsp;</h6></label>{{$proveedor->email}} <br>
      <label><h6>Municipio: &nbsp;</h6></label>{{$proveedor->municipio->nombre}} <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>