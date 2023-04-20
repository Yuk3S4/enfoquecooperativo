<?php

namespace App\Http\Controllers;

use App\Http\Resources\TareaCollection;
use App\Models\Proyecto;
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = $_GET['url'];
        $proyecto = Proyecto::where('url', $url)->get();

        return new TareaCollection(Tarea::where('proyecto_id', $proyecto[0]->id)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $proyecto = Proyecto::where('url', $request->url)->get();

        $tarea = Tarea::create([
            'nombre' => $request->nombre,
            'proyecto_id' => $proyecto[0]->id
        ]);

        return [
            'tarea' => $tarea
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        $tarea->nombre = $request->nombre;
        $tarea->estado = $request->estado;
        $tarea->save();

        return [
            'tarea' => $tarea
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
    }
}
