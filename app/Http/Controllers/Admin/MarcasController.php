<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Marca;
use Illuminate\Support\Facades\Redirect;


class MarcasController extends Controller
{
    public function index()
    {
        $marcas=Marca::get();
        return view('admin.marcas.index',compact('marcas'));
    }
    public function create()
    {
        $marcas= Marca::get();
        
        return view('admin.marcas.create',
        compact('marcas'));
    }


    public function store(Request $request)
    {
        $marca = new Marca;
        $marca->nombre = $request->get('nombre');
        $marca->save();

        $mjs=($marca)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function edit($id)
    {
        $marca = Marca::where('id', '=', $id)->first();
        return view('admin.marcas.edit',
        compact('marca'));
    }



    public function update(Request $request, $id)
    {
        $marca =Marca::findOrFail($id);
        $marca->nombre = $request->get('nombre');
        $marca->update();
        $mjs=($marca)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function destroy($id)
    {

        $marca =Marca::findOrFail($id);
        $marca->delete();
        $mjs=($marca)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}
