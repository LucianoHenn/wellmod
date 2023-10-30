<?php

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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio-slider', function () {
    return view('inicio-slider');
});
Route::get('/proyectos', function () {
    return view('proyectos');
});
Route::get('/tipologias', function () {
    return view('tipologias2');
});
Route::get('/tipologias2', function () {
    return view('tipologias');
});
Route::get('/preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/detalle', function () {
    return view('detalle1');
});
Route::get('/detalle2', function () {
    return view('detalle');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/prensa', function () {
    return view('prensa');
});
Route::get('/clientes', function () {
    return view('clientes');
});
