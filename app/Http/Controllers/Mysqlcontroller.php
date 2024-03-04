<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personas;

class MysqlController extends Controller
{
    public function obtenerTodasPersonas()
    {
        $personas = personas::orderBy('id')->get(); // Ordenar los resultados por el campo 'id'

        // Convertir los datos a formato JSON de manera legible
        $jsonResponse = json_encode($personas, JSON_PRETTY_PRINT);

        // Devolver la respuesta
        return response($jsonResponse)->header('Content-Type', 'application/json');
    }
}


