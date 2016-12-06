<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class informante extends Model
{
    protected $table = 'informante';


   
  	protected $fillable = [
            
  	 		"id_informante" ,
            "idlocalida" ,
            "infomante" ,
            "nombres_informante" ,
            "apellidos_informante",
            "edad_informante" ,
            "genero" ,
            "ocupacion", 
            "nivel_de_escolaridad" ,
            "proveniencia",
            "proveniencia_de_los_padres" ,
            "proveniencia_del_conyugue" ,
            "viajes"
            ];




     public function scopeInfor($query, $infor)

    {
        if (trim($infor)  != "")
        {

                 $query->where('nombres_informante',"LIKE", "%$infor%");

        }

   


    }


}
