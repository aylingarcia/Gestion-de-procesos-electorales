<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
    protected $table = 'elecciones'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre', 'motivo', 'cargodeautoridad', 'gestion', 'tipodevotantes', 'convocatoria', 'fecha', 'tipodeeleccion', 'descripcion'
    ];

    // Resto de las propiedades y métodos del modelo...
}