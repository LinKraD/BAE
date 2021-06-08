<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ActividadesController extends Controller
{
    public function index()
    {
        $actividades = Actividades::where('fecha_publicacion','<=', date("Y-m-d"))->get();
        
        return view('actividades.listadoActividades', compact('actividades'));
    }

    public function admin()
    {
        $actividades = Actividades::all();
        
        return view('actividades.listadoActividadesAdmin', compact('actividades'));
    }

    

    public function create()
    {
        return view('actividades.formCreaActividad');
    }

    public function store(Request $request)
    {
        Actividades::create($request->all());

        return redirect()->route('actividades.index')
                        ->with('success','Actividad creada con éxito');
    }

    public function show(Actividades $actividades)
    {
        return view('actividades.formEditarActividad', compact('actividad'));
    }

    public function edit(String $codActividad)
    {
        $actividad = Actividades::find($codActividad);
        Log::info("En Edit con $codActividad");
        return view('actividades.formEditarActividad', compact('actividad'));
    }

    public function update(Request $request)
    {
        Actividades::findOrFail($request->get("id"))->update($request->all());
        return redirect()->route('actividades.index')->with('success','Actividad modificada con éxito');;
    }
    
    public function destroy(string $codActividad)
    {
        $actividad = Actividades::findOrFail($codActividad);
        try {
            $actividad->delete();
            return redirect()->route('actividades.index')->with('success','Actividad eliminada con éxito');
        } catch (Exception $e) {
            return redirect()->route('actividades.index')->with('error','No se ha podido eliminar la actividad.');
        }
    }
}
