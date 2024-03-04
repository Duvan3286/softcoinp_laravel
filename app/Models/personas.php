<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Definición del modelo 'Personas'
class Personas extends Model
{
    // Especifica el nombre de la tabla en la base de datos asociada a este modelo
    protected $table = "persona";
    
    // Especifica el nombre de la clave primaria de la tabla
    protected $primaryKey = "id";
    
    // Indica que el modelo debe utilizar el factory predeterminado para la creación de registros falsos 
    use HasFactory;
}
