<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Impuesto;
use Illuminate\Support\Facades\Redirect;



class ImpuestosController extends Controller
{
    public function index()
    {
        $impuestos=Impuesto::get();
        return view('admin.impuestos.index',compact('impuestos'));
    }



    public function store(Request $request)
    {
        $impuesto = new Impuesto;
        $impuesto->nombre = $request->get('nombre');
        $impuesto->porcentaje =$request->get('porcentaje');
        $impuesto->decimal =$request->get('decimal');
        $impuesto->save();

        $mjs=($impuesto)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }



    public function update(Request $request, $id)
    {
        $impuesto =Impuesto::findOrFail($id);
        $impuesto->nombre = $request->get('nombre');
        $impuesto->porcentaje =$request->get('porcentaje');
        $impuesto->decimal =$request->get('decimal');
        $impuesto->update();
        $mjs=($impuesto)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function destroy($id)
    {

        $impuesto =Impuesto::findOrFail($id);
        $impuesto->delete();
        $mjs=($impuesto)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}
