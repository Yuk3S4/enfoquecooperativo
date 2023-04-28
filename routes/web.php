<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ZONA PÚBLICA */
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/servicios', [PagesController::class, 'services'])->name('servicios');
Route::get('/conocenos', [PagesController::class, 'about'])->name('conocenos');
Route::get('/contacto', [PagesController::class, 'contact'])->name('contacto');
Route::post('/contacto', [EmailController::class, 'enviarEmail'])->name('enviar-correo');
Route::get('/admin', [ LoginController::class, 'index' ])->name('login');



/* ZONA ADMINISTRATIVA - bajo middleware de Authenticate */    
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [ DashboardController::class, 'index' ])->name('dashboard');
    Route::get('/dashboard/productos', [ DashboardController::class, 'productos' ])->name('dashboard.productos');
    Route::get('/dashboard/proyectos', [ DashboardController::class, 'proyectos' ])->name('dashboard.proyectos');
    Route::get('/dashboard/usuarios', [ DashboardController::class, 'usuarios' ])->name('dashboard.usuarios');
    
    Route::get('/servicios/create', [ ServicioController::class, 'create' ])->name('servicios.create');
    Route::get('/servicios/{servicio}/edit', [ ServicioController::class, 'edit' ])->name('servicios.edit');

    Route::get('/usuarios/create', [ UserController::class, 'create' ])->name('usuarios.create');
    Route::get('/usuarios/{usuario}/edit', [ UserController::class, 'edit' ])->name('usuarios.edit');

    Route::get('/productos/create', [ ProductoController::class, 'create' ])->name('productos.create');
    Route::get('/productos/{producto}/edit', [ ProductoController::class, 'edit' ])->name('productos.edit');
    
    Route::get('/proyectos/{proyecto:url}', [ ProyectoController::class, 'show' ])->name('proyectos.show');
    
});



/* ZONA PÚBLICA */
// Productos
Route::get('/servicios/{servicio:nombre}', [PagesController::class, 'productos'])->name('productos');