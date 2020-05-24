@extends('admin.layout')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row" style="margin-top: 7px; margin-bottom: 12px;">
                    <div class="col-md-7">
                        <h3 class="content-header">Estados</h3>
                    </div>
                    <div class="col-md-5">
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" data-toggle="modal" data-target="#modal-crear-municipio">Registrar
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
                                <th>Clave</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($municipios as $municipio)
                            <tr>
                                <td>{{ $municipio->nombre }}</td>
                                <td>{{ $municipio->clave }}</td>
                                <td>
                                    <center>
                                        <a data-target="#modal-edit-{{$estado->id}}" class="btn btn-primary" data-toggle="modal">
                                            <i class="fa fa-edit" ></i>Editar
                                        </a>


                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a data-target="#modal-destroy-{{$estado->id}}" data-toggle="modal"  href="#" class="btn btn-danger">
                                            <i class="fa fa-eraser"></i>Eliminar
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            @include('admin.estado.edit')
                            @include('admin..destroy')
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@include('admin.municipios.create')
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
