<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'feria'])->name('frontend.feria');

Route::get('/visitantes', [App\Http\Controllers\HomeController::class, 'visitantes'])->name('frontend.visitantes');
Route::get('/galeria', [App\Http\Controllers\HomeController::class, 'galeria'])->name('frontend.galeria');
Route::get('/editorial', [App\Http\Controllers\HomeController::class, 'editorial'])->name('frontend.editorial');
Route::get('/noticias', [App\Http\Controllers\HomeController::class, 'noticias'])->name('frontend.noticias');
// Route::get('/noticia/${slug}', [App\Http\Controllers\HomeController::class, 'noticias'])->name('noticias');
Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('frontend.contacto');


Route::get('/editorial/detalleempresarial', [App\Http\Controllers\HomeController::class, 'detalle'])->name('frontend.detalle');
Route::get('/editorial/elproceso', [App\Http\Controllers\HomeController::class, 'elproceso'])->name('frontend.elproceso');


// formularios
Route::get('/acreditación', [App\Http\Controllers\HomeController::class, 'acreditación'])->name('frontend.acreditación');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Dashboard routes 

Route::get('/dashboard',[App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');





