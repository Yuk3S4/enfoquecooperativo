<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.proyectos');
    }

    public function show(Proyecto $proyecto)
    {        
        $this->authorize('view', $proyecto);
        $_GET['id'] = $proyecto->id;

        return view('auth.proyectos.show', [
            'proyecto' => $proyecto,
        ]);
    }
}
