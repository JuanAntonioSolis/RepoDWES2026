<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    //Mostrar todas las incidencias de bbdd
    public function index()
    {
        $incidencias = Incidencia::all(); //Trae incidencias desde la base de datos

        return view('incidencias.index', ['incidencias' => $incidencias]);
    }

    //Eliminar incidencia por id
    public function delete($id)
    {
        Incidencia::destroy($id);
        return redirect()->route('incidencias.index');
    }

    //Añadir incidencia
    public function store(Request $request)
    {
        /*
        $incidencia = new Incidencia();
        $incidencia->latitud = $request->latitud;
        $incidencia->longitud = $request->longitud;
        $incidencia->ciudad = $request->ciudad;
        $incidencia->direccion = $request->direccion;
        $incidencia->descripcion = $request->descripcion;
        $incidencia->estado = "pendiente";
        $incidencia->save();
        */

        $incidencia = Incidencia::create($request->all());

        //Ver incidencia en detalle
        return redirect()->route('incidencias.show', $incidencia->id);
    }

    //Ver incidencia
    public function show($id)
    {
        $incidencia = Incidencia::findOrFail($id);

        return view('incidencias.show', ['incidencia' => $incidencia]);
    }
}
