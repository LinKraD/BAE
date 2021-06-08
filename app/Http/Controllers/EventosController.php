<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventosController extends Controller
{

    public function index()
    {
        $eventos = Eventos::where('fecha_publicacion','<=', date("Y-m-d"))->get();
        return view('eventos.listadoEventos', compact('eventos'));
    }

    public function admin()
    {
        $eventos = Eventos::all();
        
        return view('eventos.listadoEventosAdmin', compact('eventos'));
    }


    public function create()
    {
        return view('eventos.formCreaEvento');
    }

    public function store(Request $request)
    {
        Eventos::create($request->all());

        return redirect()->route('eventos.index')
                        ->with('success','Evento creado con éxito');
    }

    public function show(Eventos $eventos)
    {
        return view('eventos.formEditarEvento', compact('eventos'));
    }

    public function edit(String $codEvento)
    {
        $evento = Eventos::find($codEvento);
        Log::info("En Edit con $codEvento");
        return view('eventos.formEditarEvento', compact('evento'));
    }

    public function update(Request $request)
    {
        Eventos::findOrFail($request->get("id"))->update($request->all());
        return redirect()->route('eventos.index')->with('success','Evento modificado con éxito');;
    }

    public function destroy(string $codEvento)
    {
        $evento = Eventos::findOrFail($codEvento);
        try {
            $evento->delete();
            return redirect()->route('eventos.index')->with('success','Evento eliminado con éxito');
        } catch (Exception $e) {
            return redirect()->route('eventos.index')->with('error','No se ha podido eliminar el evento.');
        }
    }
}
