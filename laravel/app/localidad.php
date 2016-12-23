<?php

namespace SIGALEC;

use Illuminate\Database\Eloquent\Model;
use DB;

class localidad extends Model
{
    

    protected $table = 'shape_localidades';

    public $incrementing = false;
 
    protected $primaryKey = 'idlocalida';

   
	public function informantes(){

		return $this->belongsToMany('informante')->withPivot('idlocalida');

	}


    public static function localidads(){
		return DB::table('shape_localidades')
			
			->join('informante','informante.idlocalida','=','shape_localidades.idlocalida')
			->select('shape_localidades.*', 'informante.*')
		   
			->get();
	}



}

