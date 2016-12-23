<?php

namespace SIGALEC;

use Illuminate\Database\Eloquent\Model;

class tpinforcamp extends Model
{
 	 

 	protected $table = 'tp_informante_campo_semantico';


 	
  	protected $fillable = [
            
  	 		"id_campo_semantico" ,
            "id_informante" ,
            ];


  	public $incrementing = false;
 
    protected $primaryKey = 'id_informante';


   



}