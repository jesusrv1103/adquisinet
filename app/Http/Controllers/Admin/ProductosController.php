<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Producto;
use ADQUISINET\Marca;
use ADQUISINET\Partida;
use ADQUISINET\Unidad;
use ADQUISINET\Giro;
use ADQUISINET\Impuesto;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
    public function index()
    {
        $productos=Producto::
        where('estatus','=',1)
        ->get();
    
       return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        $marcas= Marca::get();
        $partidas= Partida::get();
        $unidades= Unidad::get();
        $giros= Giro::get();
        $impuestos= Impuesto::get();
        return view('admin.productos.create',
        compact('marcas','partidas','unidades','giros','impuestos'));
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


        $producto = new Producto;
        $producto->nombre=$request->get('nombre');
        $producto->precio=$request->get('precio');
        $producto->presentacion=$request->get('presentacion');
        $producto->marca_id=$request->get('marca_id');
        $producto->partida_id=$request->get('partida_id');
        $producto->unidad_id=$request->get('unidad_id');
        $producto->giro_id=$request->get('giro_id');
        $producto->estatus=1;
        $producto->save();

        $producto->impuestos()->attach ($request->get('impuestos'));

    	$mjs=($producto)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::to('admin/productos') ->with('info',$mjs);

    }

    public function edit($id)
    {
        $producto = Producto::where('id', '=', $id)->first();
        $marcas = Marca::get();
        $partidas = Partida::get();
        $unidades = Unidad::get();
        $giros = Giro::get();
        $impuestos = Impuesto::get();

        return view('admin.productos.edit',
        compact('producto','marcas','partidas','unidades','giros','impuestos'));
        
    }

    public function update(Request $request, $id)
    {    
        $producto = Producto::findOrFail($id);
        $producto->nombre=$request->get('nombre');
        $producto->precio=$request->get('precio');
        $producto->presentacion=$request->get('presentacion');
        $producto->estatus=1;
        $producto->marca_id=$request->get('marca_id');
        $producto->partida_id=$request->get('partida_id');
        $producto->unidad_id=$request->get('unidad_id');
        $producto->giro_id=$request->get('giro_id');
        $producto->update();
        
    	$mjs=($producto)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::to('admin/productos') ->with('info',$mjs);
    }

    public function destroy($id)
    {
        $producto= Producto::findOrFail($id);
        $producto->estatus=0;
        $producto->update();
        $mjs=($producto)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }
}
