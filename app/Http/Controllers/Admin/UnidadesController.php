<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Unidad;
use Illuminate\Support\Facades\Redirect;

class UnidadesController extends Controller
{
    public function index()
    {
        $unidades=Unidad::get();
        return view('admin.unidades.index',compact('unidades'));
    }

    public function create()
    {
        $unidades= Unidad::get();
        
        return view('admin.unidades.create',
        compact('unidades'));
    }
    
    public function store(Request $request)
    {
        $unidades = new Unidad;
        $unidades->nombre = $request->get('nombre');
        $unidades->save();

        $mjs = ($unidades)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function edit($id)
    {
        $unidades = Unidad::where('id', '=', $id)->first();
        return view('admin.unidades.edit',
        compact('unidades'));
    }

    
    public function update(Request $request, $id)
    {
        $unidades =Unidad::findOrFail($id);
        $unidades->nombre = $request->get('nombre');
        $unidades->update();
        $mjs=($unidades)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }
    public function destroy($id)
    {

        $unidades =Unidad::findOrFail($id);
        $unidades->delete();
        $mjs=($unidades)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}