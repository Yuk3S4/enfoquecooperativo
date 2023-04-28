<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create()
    {
        return view('auth.productos.create');
    }

    public function edit(Producto $producto)
    {
        return view('auth.productos.edit', [
            'producto' => $producto
        ]);
    }
}
