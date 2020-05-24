<?php
namespace ADQUISINET\Http\Controllers\Admin;
use Illuminate\Http\Request;
use ADQUISINET\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use ADQUISINET\Mensaje;
use ADQUISINET\User;
use Illuminate\Support\Facades\Redirect;

class MensajesController extends Controller
{
    public function index()
    {
        
        $mensajes= DB::table('users')
        ->join('mensajes', 'users.id', '=', 'mensajes.user_id')
        ->orderByDesc('fechaEnviado')
        ->get();
        $usuarios = User::get();
        return view('admin.mensajes.index',compact('mensajes','usuarios'));
    }
    public function store(Request $request)
    {
        $mensaje = new Mensaje;
        $mensaje->mensaje = $request->get('mensaje');
        $mensaje->user_id = $request->get('user_id');
        $mensaje->fechaEnviado = Carbon::now();
        $mensaje->save();

        $mjs=($mensaje)?"Info. Creado con éxito":"Error. Datos no creados";
        return Redirect::back() ->with('info',$mjs);
    }
    public function update(Request $request, $id)
    {
        $mensaje = Mensaje::findOrFail($id);
        $mensaje->mensaje = $request->get('mensaje');
        $mensaje->update();
        $mjs=($mensaje)?"Info. Actualizado con éxito":"Error. Datos no actualizados";
        return Redirect::back() ->with('info',$mjs);
    }
    public function destroy($id)
    {

        $mensaje =Mensaje::findOrFail($id);
        $mensaje->delete();
        $mjs=($mensaje)?"Info. Eliminado con éxito":"Error. Registro no eliminado";
        return Redirect::back() ->with('info',$mjs);
    }
}