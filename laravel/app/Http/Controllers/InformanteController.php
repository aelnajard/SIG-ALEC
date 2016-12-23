<?php

namespace SIGALEC\Http\Controllers;
use Illuminate\Http\Request;
use SIGALEC\Http\Requests;
use SIGALEC\Http\Requests\UserCreateRequest;
use SIGALEC\Http\Requests\UserUpdateRequest;
use SIGALEC\Http\Controllers\Controller;
use SIGALEC\User;
use SIGALEC\informante;
use SIGALEC\localidad; 
use SIGALEC\tpinforcamp; /**llamando el modelo*/
use SIGALEC\camposem;
use Session;
use Redirect;
use Excel;
use Storage;
use load;
use save;
use Input;
use DB;

class InformanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
           
      $localidad=localidad::all();
      $camposema= camposem::orderBy('id_tomo','Asc')->get();
      $informaantes = Informante::infor($request->get('infor'))->OrderBy('id_informante', 'Asc')->paginate(40);
      
       /** $users =  User::paginate(20);*/

        

        return view('informante.index_info', compact('informaantes','localidad','camposema')); 
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
    $camposema= camposem::orderBy('id_tomo','Asc')->get();
    $localidad_form = localidad::orderBy('idlocalida','Asc')->get()->lists('idlocalida','idlocalida' );
   


       return view("informante.create_info", compact('localidad_form','camposema'))
       ->with("localidad",$localidad)
       ->with("informante",$informante)
       ->with("camposema",$camposema );
        
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

   
    $informante = new informante;           // maybe some validation here...

            $informante->id_informante = Input::get('id_informante');
            $informante->idlocalida = Input::get('id_localidad');
            $informante->infomante = Input::get('numero_informante');
            $informante->nombres_informante = Input::get('nombres');
            $informante->apellidos_informante = Input::get('apellidos');
            $informante->edad_informante = Input::get('edad');
            $informante->genero = Input::get('genero');
            $informante->ocupacion = Input::get('ocupacion');
            $informante->nivel_de_escolaridad = Input::get('nivel_de_escolaridad');
            $informante->proveniencia = Input::get('proveniencia');
            $informante->proveniencia_de_los_padres = Input::get('proveniencia_de_los_padres');
            $informante->proveniencia_del_conyugue = Input::get('proveniencia_del_conyugue');
            $informante->viajes = Input::get('viajes');
            $informante->save();
            
            $loop  = Input::get('id_campo_semantico');
             foreach ($loop as $value){
            $resortfacility = new tpinforcamp;
            $resortfacility->id_informante = Input::get('id_informante');
            $resortfacility->id_campo_semantico = $value;
            $resortfacility->save();
          }
          
            



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
    public function edit($id_informante)
    {
        $localidad_form = localidad::orderBy('idlocalida','Asc')->get()->lists('idlocalida','idlocalida' );
        $informantess = informante::find($id_informante);
        $informantesq = informante::find($id_informante)->camposeman;
        $camposema= camposem::orderBy('id_tomo','Asc')->get();
       

        return view("informante.edit_info", compact('localidad_form','tpinforcamps','associated_itens'))
      ->with("informantess", $informantess)
      ->with("informantesq", $informantesq)
      ->with("camposema",$camposema );
       
    }


       public function locamodal($idlocalida)
 
    {
      
      $localidad = localidad::find($idlocalida);          
      return response()->json($localidad);
    }



    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_informante)
    {
        $informantess = informante::find($id_informante);
        $informantesq = tpinforcamp::find($id_informante);

        $informantess->fill($request->all());  

        $informantesq->save();
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
    public function destroy($id_informante)
    {
         tpinforcamp::destroy($id_informante);
         informante::destroy($id_informante);

         Session::flash('message','Informante Eliminado Correctamente');
        return Redirect::to('/informante');

    }


    public function cargar_datos_informante(Request $request)
    {
       $archivo = $request->file('archivo');
       $nombre_original=$archivo->getClientOriginalName();
       $extension=$archivo->getClientOriginalExtension();
       $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
       $ruta  =  storage_path('archivos') ."/". $nombre_original;
       
      

  if($r1){
            
            Excel::selectSheetsByIndex(0)->load($ruta, function($hojas) {
                
                $hojas->each(function($fila) {
                    $informantes_id=Informante::where("id_informante","=",$fila->idinformante)->first();
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



    if($r1){
            
            Excel::selectSheetsByIndex(0)->load($ruta, function($hojas) {
                
                $hojas->each(function($fila) {
                    $usersemails=tpinforcamp::where("id_informante","=",$fila->email)->first();
                    if(count( $usersemails)==0){
                        $usuario=new tpinforcamp;
                        $usuario->id_campo_semantico= $fila->idcampsem;
                        //$usuario->apellidos= $fila->apellidos;
                        $usuario->id_informante= $fila->idinformante;
                        //$usuario->telefono= $fila->telefono; //este campo llamado telefono se debe agregar en la base de datos c
                        //$usuario->pais= $fila->pais;
                        //$usuario->ciudad= $fila->ciudad;
                        //$usuario->institucion= $fila->institucion;
                       // $usuario->ocupacion= $fila->ocupacion;
                       // $usuario->password= bcrypt($fila->password);

                        $usuario->save();
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
