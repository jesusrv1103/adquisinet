@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Giros
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado de Giros</a>

                <!-- <span class="kt-subheader_breadcrumbs-link kt-subheader_breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>

    </div>
</div>
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet_head kt-portlet_head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-refresh"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Listado de Giros
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        &nbsp;
                        <button data-toggle="modal"
                         data-target="#modal-crear-giro"
                            class="btn btn-brand btn btn-primary btn-elevate btn-icon-sm">
                            <i class="la icon-policeplus" data-toggle="tooltip" title="Registrar"></i>
                            Registrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="tabla_giros">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tiempo de entrega</th>
                                <th> Proveedor Asociado</th>
                                <th>Asociar Giro</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($giros as $giro)
                            <tr>
                                <td>{{ $giro->nombre }}</td>
                                <td>{{ $giro->tiempo_entrega }}</td>
                            <td></td>
                                <td>
                                    <center>
                                    <a data-toggle="modal"
                                        data-target="#modal-asociar-{{$giro->id}}"
                                            class="btn btn-label-facebook">
                                            <i class="icon-policeedit"></i>Asociar Giro</a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a data-toggle="modal"
                                        data-target="#modal-edit-{{$giro->id}}"
                                            class="btn btn-label-facebook">
                                            <i class="icon-policeedit"></i>Editar</a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <button type="button"  class="btn btn-label-google btn-label-brand btn-sm" 
                                        data-toggle="modal"
                                         data-target="#modal-destroy-{{$giro->id}}">
                                        <i class="icon-policeedit"></i>
                                        Eliminar</button>
                                    </center>
                                </td>
                            </tr>
                            @include('admin.giros.edit')
                            @include('admin.giros.destroy')
                            @include('admin.giros.asociar_proveedor')
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
@include('admin.giros.create')
@push('styles')

<!--begin::Page Vendors Styles(used by this page) -->
<link href="/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


@endpush
@push('scripts')

<!--begin::Page Vendors(used by this page) -->
<script src="/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="/assets/js/demo1/pages/crud/datatables/advanced/row-callback.js" type="text/javascript"></script>

<!--end::Page Scripts -->

<script>
$(document).ready(function() {
        $('#tabla_giros').dataTable({
            "bFilter": true
        });
    });
    $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
</script>
@endpush
@stop
