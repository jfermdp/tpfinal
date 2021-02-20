<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('peliculas/find1', [PeliculaController::class,'find1'])->name('peliculas.find1');

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('peliculas/create', [PeliculaController::class,'create']);

Route::get('peliculas/buscador', [PeliculaController::class,'busca'])->name('peliculas.buscador');

Route::post('peliculas/buscador', [PeliculaController::class,'buscador'])->name('peliculas.buscador');

Route::get('peliculas', [WelcomeController::class,'index']);

Route::post('peliculas', [PeliculaController::class,'store'])->name('peliculas.store');

Route::get('peliculas/{pelicula}', [PeliculaController::class,'show']);

Route::delete('peliculas/{pelicula}', [PeliculaController::class,'destroy'])->name('peliculas.destroy');

Route::get('peliculas/{pelicula}/edit', [PeliculaController::class,'edit'])->name('peliculas.edit');

Route::put('peliculas/{pelicula}', [PeliculaController::class,'update'])->name('peliculas.update');

Route::get('peliculas/find/{Id_artista}', [PeliculaController::class,'find'])->name('peliculas.find');

Route::get('peliculas/find/artista/{Id_artista}', [PeliculaController::class,'finda'])->name('peliculas.finda');

Route::get('peliculas/find/director/{Id_artista}', [PeliculaController::class,'findd'])->name('peliculas.findd');

Route::get('peliculas/find/pelicula/{pelicula}', [PeliculaController::class,'findp'])->name('peliculas.findp');
