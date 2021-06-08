<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();

        return view('galeria.galeriaUsuarios', compact('usuarios'));
    }

    public function buscar(Request $request){

        $nombre='%'.$request['name'].'%';

        $usuarios = User::where('name','like',$nombre)->orWhere('surnames','like',$nombre)->get();

        return view('galeria.galeriaUsuarios',compact('usuarios'));
    }

    public function admin()
    {
        $usuarios = User::all();
        
        return view('usuarios.listadoUsuariosAdmin', compact('usuarios'));
    }


    public function perfil(Request $request){

        $usuarios = User::where('id','=',$request['id'])->get();

        return view('galeria.galeriaUsuarios',compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.formSubeImagen');
    }

    public function store(Request $request)
    {
        Usuarios::create($request->all());

        return redirect()->route('usuarios.index')
                        ->with('success','Imagen subida con éxito');
    }

    public function show(Usuarios $usuarios)
    {
        return view('usuarios.formEditaImagen', compact('usuarios'));
    }

    public function editAdmin(String $codUsuario)
    {
        $usuario = User::find($codUsuario);
        Log::info("En Edit con $codUsuario");
        return view('usuarios.formEditarUsuarioAdmin', compact('usuario'));
    }

    public function edit(String $codUsuario)
    {
        $usuario = User::find($codUsuario);
        Log::info("En Edit con $codUsuario");
        return view('usuarios.formEditarUsuario', compact('usuario'));
    }

    public function update(Request $request)
    {
        User::findOrFail($request->get("id"))->update($request->all());
        return redirect()->route('usuarios.admin')->with('success','Usuario modificado con éxito');;
    }

    public function destroy(string $codUsuario)
    {
        $usuario = User::findOrFail($codUsuario);
        try {
            $usuario->delete();
            return redirect()->route('usuarios.index')->with('success','Imagen eliminada con éxito');
        } catch (Exception $e) {
            return redirect()->route('usuarios.index')->with('error','No se ha podido eliminar la imagen.');
        }
    }

}
