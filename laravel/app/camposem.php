<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class camposem extends Model
{
     	protected $table = 'campo_semantico';


   
  	protected $fillable = [
            
  	 		'id_campo_semantico',
  			'campo_semantico',
  			'id_tomo',
            ];

    public $incrementing = false;


    protected $primaryKey = 'id_campo_semantico';



       public function tp_inform_camposem()
    {
        return $this->hasMany('App\tpinforcamp', 'id_campo_semantico', 'id_campo_semantico');
    }


    public function informante()

  {

   return $this->belongsToMany('Cinema\informante');

  }


}
