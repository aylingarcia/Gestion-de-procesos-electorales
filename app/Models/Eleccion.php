<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
    protected $table = 'eleccions';

    // Relación 1 a muchos con Comite
    public function comites()
    {
        return $this->hasMany(Comite::class,'id_eleccion');
    }

    // Relación 1 a muchos con Persona
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}
