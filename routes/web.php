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
// Esta ruta define una solicitud GET a la URL '/personas'
// Cuando se accede a esta URL, se invoca el método 'obtenerTodasPersonas' del controlador 'MysqlController'
// Esto significa que cuando un usuario accede a '/personas', se ejecutará el método 'obtenerTodasPersonas' del controlador 'MysqlController'
Route::get('/personas', 'App\Http\Controllers\MysqlController@obtenerTodasPersonas');




