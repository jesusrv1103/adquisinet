@extends('admin.layout')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row" style="margin-top: 7px; margin-bottom: 12px;">
                    <div class="col-md-7">
                        <h3 class="content-header">Impuestos</h3>
                    </div>
                    <div class="col-md-5">
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" data-toggle="modal" data-target="#modal-crear-impuesto">Registrar
                                <i class="fa fa-plus"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Porcentaje</th>
                                <th>Decimal</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($impuestos as $impuesto)
                            <tr>
                                <td>{{ $impuesto->nombre }}</td>
                                <td>{{ $impuesto->porcentaje }}</td>
                                <td>{{ $impuesto->decimal }}</td>
                                <td>
                                    <center>
                                        <a data-target="#modal-edit-{{$impuesto->id}}" class="btn btn-primary"
                                            data-toggle="modal">
                                            <i class="fa fa-edit"></i>Editar
                                        </a>


                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a data-target="#modal-destroy-{{$impuesto->id}}" data-toggle="modal" href="#"
                                            class="btn btn-danger">
                                            <i class="fa fa-eraser"></i>Eliminar
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            @include('admin.impuestos.edit')
                            @include('admin.impuestos.destroy')
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@include('admin.impuestos.create')
@push('styles')
<link href="/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@endpush


@push('scripts')
<script src="/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
</script>
@endpush
@stop
