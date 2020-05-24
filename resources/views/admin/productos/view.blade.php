<div class="modal fade" id="view-producto-{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detalles del producto: {{$producto->nombre}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label><h6> Nombre: &nbsp;</h6></label>{{ $producto->nombre }} <br>
      <label><h6> Precio: &nbsp;</h6></label>{{ $producto->precio }}<br>
      <label><h6> Presentación: &nbsp;</h6></label>{{ $producto->presentacion }}<br>
      <label><h6> Marca: &nbsp;</h6></label>{{ $producto->marca->nombre }}<br>
      <label><h6> Partida: &nbsp;</h6></label>{{ $producto->partida->nombre }}<br>
      <label><h6> Unidad: &nbsp;</h6></label>{{ $producto->unidad->nombre }}<br>
      <label><h6> Giro: &nbsp;</h6></label>{{ $producto->giro->nombre }}<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>