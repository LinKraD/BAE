<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Imagenes;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImagenesController extends Controller
{
    public function index()
    {

        $imagenes = Imagenes::all();

        return view('galeria.galeria', compact('imagenes'));
    }

    public function admin()
    {

        $imagenes = Imagenes::all();

        return view('galeria.galeria', compact('imagenes'));
    }

    public function galeria(string $codUsuario)
    {        
        $imagenes = Imagenes::where('autor','=',$codUsuario)->get();

        return view('galeria.galeria',compact('imagenes'));
    }

    public function imagen(string $nombre)
    {
        $imagen = Imagenes::where('nombre','=',$nombre)->first();
        $usuario = User::where('id','=',$imagen['autor'])->first();

        return view('galeria.imagen',compact('imagen','usuario'));
    }

    public function create()
    {
        return view('galeria.formSubeImagen');
    }

    public function store(Request $request)
    {
        $request->file('archivo')->store('public/img/galeria');
        var_dump($request['archivo']->hashName());
        $nuevaImagen = new Imagenes;
        $nuevaImagen->titulo = $request['titulo'];
        $nuevaImagen->descripcion = $request['descripcion'];
        $nuevaImagen->ruta = $request['ruta'];
        $nuevaImagen->autor = $request['autor'];
        $nuevaImagen->nombre = $request['archivo']->hashName();
        Imagenes::create($nuevaImagen->toArray());

        return redirect()->route('fotos.index')
                        ->with('success','Imagen subida con éxito');
    }

    public function show(Imagenes $imagenes)
    {
        return view('imagenes.formEditaImagen', compact('imagenes'));
    }

    public function edit(String $codImagen)
    {
        $imagen = Imagenes::find($codImagen);
        Log::info("En Edit con $codImagen");
        return view('imagenes.formEditaImagen', compact('imagen'));
    }

    public function update(Request $request)
    {
        Imagenes::findOrFail($request->get("id"))->update($request->all());
        return redirect()->route('imagenes.index')->with('success','Imagen modificada con éxito');;
    }

    public function destroy(string $codImagen)
    {
        $imagen = Imagenes::findOrFail($codImagen);
        try {
            $imagen->delete();
            return redirect()->route('imagenes.index')->with('success','Imagen eliminada con éxito');
        } catch (Exception $e) {
            return redirect()->route('imagenes.index')->with('error','No se ha podido eliminar la imagen.');
        }
    }

    
}
