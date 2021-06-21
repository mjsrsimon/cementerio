<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FallecidoController;
use App\Http\Controllers\TitularController;
use App\Http\Controllers\NichoController;

use App\Http\Controllers\NichoRestoController;
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

Route::resource('titulars', TitularController::class);
Route::resource('fallecidos', FallecidoController::class);

Route::resource('nichos', NichoController::class);
Route::resource('nichos_restos', NichoRestoController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
