<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Proveedor;
use ADQUISINET\Municipio;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Input;

class ProveedorController extends Controller
{

    public function index()
    {
       $proveedores=Proveedor::
        where('estado','=','Activo')
        ->get();
        
        return view('admin.proveedores.index', compact('proveedores'));
    }

    public function create()
    {

        $proveedores = Proveedor::get();
        $municipios = Municipio::get();
        return view('admin.proveedores.create',
        compact('proveedores', 'municipios'));
    }

    public function store(Request $request)
    {

    //   $this->validate($request, [
    // 		'nombre' => 'required',
    // 		'precio' => 'required',
    // 		'presentacion' => 'required',
    // 		'marca_id' => 'required',
    //         'partida_id' => 'required',
    //         'unidad_id' => 'required',
    //         'giro_id' => 'required',
    //         'impuestos' => 'required'
    //     ]);
    $this->validate($request, [
        'img_cedula' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $proveedor = new Proveedor;
    
        $image = $request->file('img_cedula');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $proveedor->img_cedula=$name;
        $image->move($destinationPath, $name);

        $proveedor->nombre=$request->get('nombre');
        $proveedor->razon_social=$request->get('razon_social');
        $proveedor->RFC=$request->get('rfc');
        $proveedor->cedula=$request->get('cedula');
        $proveedor->tipo_persona=$request->get('tipo_persona');
        $proveedor->domicilio=$request->get('domicilio');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->estado=$request->get('estado');
        $proveedor->contacto=$request->get('contacto');
        $proveedor->representante_legal=$request->get('representante_legal');
        $proveedor->capital_contable=$request->get('capital_contable');
        $proveedor->fecha_vigencia_cedula=$request->get('fecha_vigencia_cedula');
        
        $proveedor->email=$request->get('email');
        $proveedor->municipio_id=$request->get('municipio_id');

        
        $proveedor->estado="Activo";
        $proveedor->save();

    	$mjs=($proveedor)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::to('admin/proveedores') ->with('info',$mjs);

    }

    public function edit($id)
    {
        $proveedor = Proveedor::where('id', '=', $id)->first();
        $municipio2 = Municipio::where('id', '=', $proveedor->municipio_id)->first();

        $municipios = Municipio::get();
        return view('admin.proveedores.edit',
        compact('proveedor', 'municipios','municipio2'));
    }

    public function update(Request $request, $id)
    {

        $proveedor =Proveedor::findOrFail($id);

        $image = $request->file('img_cedula');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $proveedor->img_cedula=$name;
        $image->move($destinationPath, $name);
        
        $proveedor->nombre=$request->get('nombre');
        $proveedor->razon_social=$request->get('razon_social');
        $proveedor->RFC=$request->get('rfc');
        $proveedor->cedula=$request->get('cedula');
        $proveedor->tipo_persona=$request->get('tipo_persona');
        $proveedor->domicilio=$request->get('domicilio');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->estado=$request->get('estado');
        $proveedor->contacto=$request->get('contacto');
        $proveedor->representante_legal=$request->get('representante_legal');
        $proveedor->capital_contable=$request->get('capital_contable');
        $proveedor->fecha_vigencia_cedula=$request->get('fecha_vigencia_cedula');
    
        $proveedor->email=$request->get('email');
        $proveedor->municipio_id=$request->get('municipio_id');
        $proveedor->estado="Activo";
        $proveedor->update();
        
    	$mjs=($proveedor)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::to('admin/proveedores') ->with('info',$mjs);
    }

    public function destroy($id)
    {
        $proveedor= Proveedor::findOrFail($id);
        $proveedor->delete();
        $mjs=($proveedor)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}
