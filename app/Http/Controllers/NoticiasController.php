<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Noticias;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NoticiasController extends Controller
{

    public function inicio(){
        $noticias = Noticias::where('fecha_publicacion','<=', date("Y-m-d"))->get();
        $eventos = Eventos::where('fecha_publicacion','<=', date("Y-m-d"))->get();
        return view('inicio', compact('noticias','eventos'));
    }

    public function admin()
    {
        $noticias = Noticias::all();
        
        return view('noticias.listadoNoticiasAdmin', compact('noticias'));
    }

    

    public function index()
    {
        $noticias = Noticias::where('fecha_publicacion','<=', date("Y-m-d"))->get();
        
        return view('noticias.listadoNoticias', compact('noticias'));
    }

    public function create()
    {
        return view('noticias.formCreaNoticia');
    }

    public function store(Request $request)
    {
        Noticias::create($request->all());

        return redirect()->route('noticias.index')
                        ->with('success','Noticia creada con éxito');
    }

    public function show(Noticias $noticias)
    {
        return view('noticias.formEditarNoticia', compact('noticias'));
    }

    public function edit(String $codNoticia)
    {
        $noticia = Noticias::find($codNoticia);
        Log::info("En Edit con $codNoticia");
        return view('noticias.formEditarNoticia', compact('noticia'));
    }

    public function update(Request $request)
    {
        Noticias::findOrFail($request->get("id"))->update($request->all());
        return redirect()->route('noticias.index')->with('success','Noticia modificada con éxito');;
    }
    
    public function destroy(string $codNoticia)
    {
        $noticia = Noticias::findOrFail($codNoticia);
        try {
            $noticia->delete();
            return redirect()->route('noticias.index')->with('success','Noticia eliminada con éxito');
        } catch (Exception $e) {
            return redirect()->route('noticias.index')->with('error','No se ha podido eliminar la noticia.');
        }
    }
}
