<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function services()
    {
        $servicios = Servicio::all();
        return view('services.index', [
            'servicios' => $servicios,
        ]);
    }

    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
