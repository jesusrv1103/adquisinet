<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Partida;
use Illuminate\Support\Facades\Redirect;

class PartidasController extends Controller
{
    public function index()
    {
        $partidas=Partida::get();
        return view('admin.partidas.index',compact('partidas'));
    }

    public function create()
    {
        $marcas= Partida::get();
        
        return view('admin.partidas.create',
        compact('partidas'));
    }


    public function store(Request $request)
    {
        $partida = new Partida;
        $partida->nombre = $request->get('nombre');
        $partida->numero =$request->get('numero');
        $partida->save();

        $mjs=($partida)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function edit($id)
    {
        $marca = Marca::where('id', '=', $id)->first();
        return view('admin.partidas.edit',
        compact('partidas'));
    }


    public function update(Request $request, $id)
    {
        $partida =Partida::findOrFail($id);
        $partida->nombre = $request->get('nombre');
        $partida->numero =$request->get('numero');
        $partida->update();
        $mjs=($partida)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function destroy($id)
    {

        $partida =Partida::findOrFail($id);
        $partida->delete();
        $mjs=($partida)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}
