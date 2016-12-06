<?php

namespace Cinema\Http\Controllers;
use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\User;
use Cinema\informante;
use Cinema\localidad; /**llamando el modelo*/
use Session;
use Redirect;
use Excel;
use Storage;
use load;
use save;

class InformanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {

   $informaantes = Informante::infor($request->get('infor'))->OrderBy('id_informante', 'Asc')->paginate(20);
       /** $users =  User::paginate(20);*/

        

        return view('informante.index_info', compact('informaantes')); 
    } 

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
     $user=User::find($id);
    $localidad=localidad::all();
    $informante=informante::all();
    $encuentra= informante::all();
    $localidad_form = localidad::orderBy('idlocalida','Asc')->get()->lists('idlocalida','idlocalida' );


       return view("informante.create_info", compact('localidad_form'))
       ->with("localidad",$localidad)
       ->with("informante",$informante)
       ->with("encuentra",$encuentra );
       
    }

    /**
   <!--<?php foreach($localidad as $loca){  ?>
                  <li class="list-group-item">
                  <i class="fa fa-book margin-r-5"></i><b>--<?= $loca->nombre; ?></b> <a class="pull-right"></a>
                  
                  <?php foreach($informante as $info){  ?>
                  <?php  if($info->idlocalida==$loca->idlocalida){   ?>
                        
                   <br/> <i class="fa fa-circle-o text-yellow"></i> <span class="text-light-blue" >-<?=  $info->nombres_informante;  ?></span>
                  <span>-<?=  $info->apellidos_informante;  ?></span>  
                  
                       
                  <?php } ?>
                  <?php } ?>
                   
                  </li>

                   <?php } ?>

                   
                  </ul>

                  <a href="javascript:void(0);" class="btn btn-primary btn-block"><b>-</b></a>
               
-->
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       informante::create([
            "id_informante"  => $request ["id_informante"],
            "idlocalida"  => $request ["id_localidad"],
            "infomante"  => $request ["numero_informante"],
            "nombres_informante"  => $request ["nombres"],
            "apellidos_informante"  => $request ["apellidos"],
            "edad_informante"  => $request ["edad"],
            "genero"  => $request ["genero"],
            "ocupacion"  => $request ["ocupacion"],
            "nivel_de_escolaridad"  => $request ["nivel_de_escolaridad"],
            "proveniencia"  => $request ["proveniencia"],
            "proveniencia_de_los_padres"  => $request ["proveniencia_de_los_padres"],
            "proveniencia_del_conyugue"  => $request ["proveniencia_del_conyugue"],
            "viajes"  => $request["viajes"],
            ]);

         return redirect('/informante')->with('message','Informante Agregado Satisfactoriamente');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localidad_form = localidad::orderBy('idlocalida','Asc')->get()->lists('idlocalida','idlocalida' );
        $informantess = informante::find($id);
       
        return view("informante.edit_info", compact('localidad_form'))
       ->with("informantess", $informantess);
       
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $informantess = informante::find($id);
        $informantess->fill($request->all());
        $informantess->save();
        Session::flash('message','Informante Editado Correctamente');
        return Redirect::to('/informante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function cargar_datos_informante(Request $request)
    {
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
       $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
       if($r1){
            
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {
                
                $hoja->each(function($fila) {
                    $informantes_id=Informante::where("id_informante","=",$fila->Idinformante)->first();
                    if(count($informantes_id)==0){
                        $informante=new Informante;
                        $informante->idlocalida= $fila->idlocalidad;
                        $informante->id_informante= $fila->idinformante;
                        $informante->infomante= $fila->informante;
                        $informante->nombres_informante= $fila->nombre;
                        $informante->apellidos_informante= $fila->apellidos;
                        $informante->edad_informante= $fila->edad;
                        $informante->genero= $fila->genero;
                        $informante->ocupacion= $fila->ocupacion;
                        $informante->nivel_de_escolaridad= $fila->nivelescolaridad;
                        $informante->proveniencia= $fila->proveniencia;
                        $informante->proveniencia_de_los_padres= $fila->provenienciadelospadres;
                        $informante->proveniencia_del_conyugue= $fila->provenienciadelconyuge;
                        $informante->viajes= $fila->viajes;
                        //$usuario->apellidos= $fila->apellidos;
                        //$informante->email= $fila->email;
                        //$usuario->telefono= $fila->telefono; //este campo llamado telefono se debe agregar en la base de datos c
                        //$usuario->pais= $fila->pais;
                        //$usuario->ciudad= $fila->ciudad;
                        //$usuario->institucion= $fila->institucion;
                       // $usuario->ocupacion= $fila->ocupacion;
                        $informante->save();
                        Session::flash('message','Informantes Editado Correctamente');
                    }
             

                });

       

            });

              Session::flash('message','Informantes agregados Correctamente');
        
       }
       else
       {
            Session::flash('message-error','Informantes no han sido agregados Correctamente');
       }

            
       }
}
