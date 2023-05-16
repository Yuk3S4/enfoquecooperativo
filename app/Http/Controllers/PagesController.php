<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Support\Str;
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

    public function productos(Servicio $servicio)
    {
        $productos = Producto::where('servicio_id', $servicio->id)->get();

        foreach($productos as $producto) {
            $video = explode("/", $producto->video);

            if ( substr($video[3], 0, 5) ===  'watch' ) {
                $url = substr($video[3], 8, Str::length($video[3]));
                $producto->video = "https://www.youtube.com/embed/" . $url ."?enablejsapi=1";
                $producto->media = true;
            } else {
                $producto->media = false;
            }
        }

        return view('productos.index', [
            'productos' => $productos,
        ]);
    }
}
