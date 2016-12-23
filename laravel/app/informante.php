<?php

namespace SIGALEC;

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

    public $incrementing = false;
 
    protected $primaryKey = 'id_informante';

    
   

    public function scopeInfor($query, $infor)

    {
        if (trim($infor)  != "")
        {

                 $query->where('nombres_informante',"LIKE", "%$infor%");

        }
    }


       public function tp_inform_camposema()
    {
        return $this->hasMany('SIGALEC\tpinforcamp', 'id_informante', 'id_informante');
    }



     public function camposeman()

     {

    return $this->belongsToMany('SIGALEC\camposem','tp_informante_campo_semantico','id_informante','id_campo_semantico');

     }


}