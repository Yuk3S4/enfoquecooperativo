<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.index');
    }

    public function create()
    {
        return view('auth.servicios.create');
    }

    public function edit(Servicio $servicio)
    {
        return view('auth.servicios.edit', [
            'servicio' => $servicio
        ]);
    }
}
