@extends('admin.layouts.main')
@section('sub-header')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Productos
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Listado de Produtos
                </a>
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
            <div class="kt-portlet__head-label" style="margin: 10px 0px 0px 30px"> <!-- Arriba, derecha, abajo, izquierda  -->
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-open-box"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Listado de Productos
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions" style="margin-left: 20px">
                        &nbsp;
                        <a href="{{route('admin.productos.create')}}"
                            class="btn btn-brand btn btn-primary btn-elevate btn-icon-sm">
                            <i class="la icon-policeplus" data-toggle="tooltip" title="¡Editar!"></i>
                            Registrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Presentacion</th>
                        <th>Marca</th>
                        <th>Partida</th>
                        <th>Unidad</th>
                        <th>Giro</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>
                            <center> 
                                <button data-toggle="modal" data-target="#view-producto-{{$producto->id}}" type="button" style="border: 0px; background-color: #fff;">
                                    <i class="flaticon-eye"></i>
                                </button>
                            </center> 
                        </td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->presentacion }}</td>
                        <td>{{ $producto->marca->nombre }}</td>
                        <td>{{ $producto->partida->nombre }}</td>
                        <td>{{ $producto->unidad->nombre }}</td>
                        <td>{{ $producto->giro->nombre }}</td>

                        <td>
                            <center>
                            <a href="{{route('admin.productos.edit', $producto->id)}}" 
                                            class="btn btn-label-facebook">
                                            <i class="icon-policeedit"></i>Editar</a>
                            </center>
                        </td>
                        <td>
                            <center>
                                <button type="button"  class="btn btn-label-google btn-label-brand btn-sm" 
                                data-toggle="modal"
                                         data-target="#modal-destroy-{{$producto->id}}">
                                <i class="icon-policeedit"></i>
                                Eliminar</button>
                            </center>
                         
                        </td>
                        
                    </tr>
                    
                    @include('admin.productos.destroy')
                    @include('admin.productos.view')
                    @endforeach
                </tbody>
                
            </table>
           
            <!--end: Datatable -->
        </div>
    </div>
</div>

<!-- end:: Content -->
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
    $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
</script>
@endpush
@stop
