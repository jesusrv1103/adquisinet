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
                    Proveedores </a>
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
                    Registrar Proveedor
                </h3>
            </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right" method="POST" action="{{route('admin.proveedores.update', $proveedor->id)}}" accept-charset="utf-8" enctype="multipart/form-data">
        {{ method_field('PUT') }}    
        {{ csrf_field() }}
            <div class="kt-portlet__body">

                <div class="form-group row">
                            <label class="col-sm-3 control-label">NOMBRE DEL PROVEEDOR:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->nombre }}"  name="nombre" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="ANGEL ROJAS DEVELOPER" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">RAZON SOCIAL:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->razon_social }}" name="razon_social" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="SAM'S" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">RFC:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->rfc }}" name="rfc" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="ROVA0000000" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 control-label">CEDULA:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->cedula }}" name="cedula" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="DLC/P/1478/2018" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 control-label">TIPO DE PERSONA:</label>
                            <div class="col-sm-6 row">
                                <input type="radio" name="tipo_persona" id="optionsRadios1" value="Fisica"
                                {{ $proveedor->tipo_persona == 'Fisica' ? 'checked' : '' }}>Fisica

                                <input type="radio" name="tipo_persona" id="optionsRadios2" value="Moral"
                                {{ $proveedor->tipo_persona == 'Moral' ? 'checked' : '' }}>Moral
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-3 control-label">DOMICILIO:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->domicilio }}" name="domicilio" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="COLONIA NUEVA  CALLE FRANCISCO I MADERO #12" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">TELEFONO:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->telefono }}" name="telefono" onkeyup="mayus(this);" class="form-control solo_numeros" required
                                    placeholder="4991058737" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">CONTACTO:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->contacto }}" name="contacto" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="INGRESA CONTACTO" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">REPRESENTANTE LEGAL:</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{ $proveedor->representante_legal }}" name="representante_legal" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="INGRESA REPRESENTANTE LEGAL" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 control-label">CAPITAL CONTABLE:</label>
                            <div class="col-sm-6">
                                <input type="text" class="solo_decimales form-control" value="{{ $proveedor->capital_contable }}" name="capital_contable" onkeyup="mayus(this);" required
                                    placeholder="192324" />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 control-label">FECHA DE VIGENCIA DE CEDULA:</label>
                            <div class="col-sm-6">
                                <input type="date" value="{{ $proveedor->fecha_vigencia_cedula }}" name="fecha_vigencia_cedula" onkeyup="mayus(this);" class="form-control" required
                                    />
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 control-label">CORREO ELECTRONICO:</label>
                            <div class="col-sm-6">
                                <input type="email" value="{{ $proveedor->email }}" name="email" onkeyup="mayus(this);" class="form-control" required
                                    placeholder="Ingresa tu correo electronico" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">IMAGEN CEDULA:</label>
                            <div class="col-sm-6">

                                <input type="file" value="{{ $proveedor->img_cedula }}" id="img_cedula" name="img_cedula" accept="image/png, .jpeg, .jpg, image/gif"
                                    style="  display: none;" required>
                                <label for="img_cedula">Click para seleccionar una imagen</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 control-label">MUNICIPIO: <strong
                                    class="theme_color">*</strong></label>
                            <div class="col-sm-6">
                                <select name="municipio_id" class="form-control select2" required>
                                    <option value="{{$municipio2->id}}">
                                        {{$municipio2->nombre}}
                                    </option>
                                    @foreach ($municipios as $municipio)
                                    <option value="{{ $municipio->id }}">{{ $municipio->nombre }}</option>
                                    @endforeach

                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <a href="{{route('admin.proveedores.index')}}" class="btn btn-default">Cancelar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
    @push('styles')


    <link href="/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    @endpush


    @push('scripts')
    <script src="/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });

        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
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
    @endpush
    @stop
