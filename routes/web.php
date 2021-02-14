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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [WelcomeController::class,'index']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('peliculas', [PeliculaController::class,'index']);
Route::get('peliculas/create', [PeliculaController::class,'create']);

Route::post('peliculas', [PeliculaController::class,'store'])->name('peliculas.store');

Route::get('peliculas/{pelicula}', [PeliculaController::class,'show']);

