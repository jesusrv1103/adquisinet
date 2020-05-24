<?php

namespace ADQUISINET\Http\Controllers\Admin;

use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\Giro;
use Illuminate\Support\Facades\Redirect;


class GirosController extends Controller
{
    public function index()
    {
        $giros=Giro::get();
        return view('admin.giros.index',compact('giros'));
    }
    public function create()
    {
        $marcas= Giro::get();
        
        return view('admin.giros.create',
        compact('giros'));
    }


    public function store(Request $request)
    {
        $giro = new Giro;
        $giro->nombre = $request->get('nombre');
        $giro->tiempo_entrega =$request->get('tiempo_entrega');
        $giro->save();

        $mjs=($giro)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function edit($id)
    {
        $marca = Giro::where('id', '=', $id)->first();
        return view('admin.giros.edit',
        compact('giros'));
    }


    public function update(Request $request, $id)
    {
        $giro =Giro::findOrFail($id);
        $giro->nombre = $request->get('nombre');
        $giro->tiempo_entrega =$request->get('tiempo_entrega');
        $giro->update();
        $mjs=($giro)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function destroy($id)
    {

        $giro =Giro::findOrFail($id);
        $giro->delete();
        $mjs=($giro)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}
