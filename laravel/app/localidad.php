<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class localidad extends Model
{
    
    protected $table = 'shape_localidades';

    public function informante()
    {
        return $this->hasMany('App\informante', 'idlocalida', 'id_informante');
    }


    
}
