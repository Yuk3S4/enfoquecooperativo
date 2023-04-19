<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.usuarios');
    }

    public function create()
    {
        return view('auth.usuarios.create');
    }

    public function edit(User $usuario)
    {
        return view('auth.usuarios.edit', [
            'usuario' => $usuario
        ]);
    }
}
