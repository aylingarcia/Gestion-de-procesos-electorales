<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comite extends Model
{
    protected $table = 'comites';

    // Relación muchos a uno con Eleccion
    public function eleccion()
    {
        return $this->belongsTo(Eleccion::class, 'id_eleccion'); 
    }

    // Relación uno a muchos con Persona
    public function personas()
    {
        return $this->hasMany(Persona::class, 'id_comite');
    }
}