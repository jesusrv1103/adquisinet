@extends('admin.layouts.main')
@section('sub-header')
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                ADQUISINET
            </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Productos </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Registrar </a>
            </div>
        </div>


    </div>
</div>

<!-- end:: Subheader -->
@stop
@section('content')
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid_item kt-grid_item--fluid">

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Registrar Producto
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST" action="{{route('admin.productos.store')}}">
            {{ csrf_field() }}
            <div class="kt-portlet__body">

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">NOMBRE DEL PRODUCTO:</label>
                    <div class="col-10">
                        <input onkeyup="mayus(this);" class="form-control" type="text" required placeholder="Ejemplo: TORTILLAS DE HARINA"
                            name="nombre" required>
                        <span class="form-text text-muted">
                            Por favor ingresa nombre de producto
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">PRECIO:</label>
                    <div class="col-10">
                        <input name="precio" class="form-control .solo_decimales" type="number" placeholder="Ejemplo: $12.50" required>
                        <span class="form-text text-muted .solo_decimales"  >
                            Por favor ingresa un precio valido
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">PRESENTACION:</label>
                    <div class="col-10">
                        <input class="form-control" name="presentacion" type="text" required placeholder="Ejemplo: CAJA">
                        <span class="form-text text-muted"  onkeyup="mayus(this);" >
                            Por favor ingresa la presentacion del producto
                        </span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">SELECCIONA LA MARCA:</label>
                    <div class=" col-lg-10">
                        <select class="form-control kt-select2" id="kt_select2_1" name="marca_id">
                            @foreach ($marcas as $marca)
                            <option value="{{$marca->id}}">
                                {{$marca->nombre}}
                            </option>
                            @endforeach
                        
                        </select>
                        Por favor selecciona una marca
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">PARTIDA:</label>
                    <div class=" col-lg-10">
                        <select required class="form-control kt-select2" id="kt_select2_1" name="partida_id">
                            @foreach ($partidas as $partida)
                            <option value="{{$partida->id}}"> {{$partida->nombre}}</option>
                            @endforeach
                            {{-- <option value="">PARTIDA 1</option>
                            <option value="">PARTIDA 2</option> --}}
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">UNIDAD DE MEDIDA:</label>
                    <div class=" col-lg-10">
                        <select required class="form-control kt-select2" id="kt_select2_1" name="unidad_id">
                            @foreach ($unidades as $unidad)
                            <option value="{{$unidad->id}}">{{$unidad->nombre}}</option>
                            @endforeach
                          
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">SELECCIONA GIRO:</label>
                    <div class=" col-lg-10">
                        <select required class="form-control kt-select2" id="kt_select2_1" name="giro_id">
                            @foreach ($giros as $giro)
                            <option value="{{$giro->id}}">
                                {{$giro->nombre}}
                            </option>
                            @endforeach
                            
                        </select>
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label class="col-2 col-form-label">IMPUESTOS:</label>
                    <div class="col-10">
                        <div class="kt-radio-inline">
                            <label class="kt-radio">
                                <input type="radio" name="impuestos" value="0"> 0%
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" checked="checked" name="impuestos" value="16"> 16%
                                <span></span>
                            </label>
                            
                        </div>
                    </div>
                </div> -->

                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-success">Registrar</button>
                                <a href="{{route('admin.productos.index')}}" class="btn btn-secondary">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

        <!--end::Form-->
    </div>

    <!--end::Portlet-->

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
<script src="/assets/js/demo1/pages/crud/datatables/extensions/colreorder.js" type="text/javascript"></script>
<script>
        $(document).ready(function () {
            
            $(".solo_numeros").on("keypress keyup blur",function (event) {    
            $(this).val($(this).val().replace(/[^\d].+/, ""));
                if ((event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                }
            });

            $(".solo_decimales").on("keypress keyup blur",function (event) {
                    //this.value = this.value.replace(/[^0-9\.]/g,'');
            $(this).val($(this).val().replace(/[^0-9\.]/g,''));
                    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                        event.preventDefault();
                    }
                });

        });
    </script>

<!--end::Page Scripts -->
@endpush
@stop