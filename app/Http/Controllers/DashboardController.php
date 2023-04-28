<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.index');
    }

    public function productos()
    {
        return view('auth.dashboard.productos');
    }

    public function proyectos()
    {
        return view('auth.dashboard.proyectos');
    }

    public function usuarios()
    {
        return view('auth.dashboard.usuarios');
    }
}
