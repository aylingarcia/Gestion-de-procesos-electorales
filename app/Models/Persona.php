<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    // Relación muchos a uno con Eleccion
    public function eleccion()
    {
        return $this->belongsTo(Eleccion::class, 'id_eleccion');
    }

    // Relación muchos a uno con Comite
    public function comite()
    {
        return $this->belongsTo(Comite::class, 'id_comite');
    }
}
