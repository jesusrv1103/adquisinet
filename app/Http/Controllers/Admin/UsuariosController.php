<?php
namespace ADQUISINET\Http\Controllers\Admin;
use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use ADQUISINET\User;
use Illuminate\Support\Facades\Redirect;
use ADQUISINET\Http\Requests\ValidarFormularioRequest;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios=User::get();
        return view('admin.usuarios.index',compact('usuarios'));
    }
    public function create()
    {

        $usuarios = User::get();
        return view('admin.usuarios.create',
        compact('usuarios'));
    }
    public function store(ValidarFormularioRequest $request)
    {
        $usuario = new User;
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->password = $request->get('password');
        $usuario->estado = 'estado';
        $usuario->save();

        $mjs=($usuario)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }

    public function edit($id)
    {
        $usuario = User::where('id', '=', $id)->first();
        return view('admin.usuarios.edit',
        compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario =User::findOrFail($id);
        $usuario->name = $request->get('name');
        $usuario->email =$request->get('email');
        $usuario->estado =$request->get('estado');
        $usuario->password =$request->get('password');
        $usuario->update();
        $mjs=($usuario)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }
    public function destroy($id)
    {

        $usuario =User::findOrFail($id);
        $usuario->delete();
        $mjs=($usuario)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}