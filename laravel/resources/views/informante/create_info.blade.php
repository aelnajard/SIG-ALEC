@extends('layouts.admin')
  @section('content')
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<br><br>

<section style="margin-left: 275px"> 
                    
  <div class="margin"  id="botones_control" >
        <button type="button" class="btn btn-primary" onclick="informante_mostrar();" >
             Agregar  Informante
        </button>
        <button type="button" class="btn btn-primary" onclick="localidad_mostrar();"> Agregar Archvio Excel</button>
  </div>
</section>


  <section> 

<div id="seccion_localidad" class="row" style="float:left;margin-left: 275px; width: 1030px; background-color:white;  border-top:5px solid black; height: 1180px; margin-top: 10px;font-family:Verdana, Arial, Helvetica, sans-serif;color: black;border-style: groove;">  

           <div class="col-md-4" ><br>
 
              <div class="box box-primary">
                        
                     <div class="box-header" style="width:500px; margin-left: 300px;">
                          <h3 class="box-title">Ingrese los Datos del Informante </h3><br><br><br>
                     </div><!-- /.box-header -->

  <input type="hidden" name="_token" value="{{csrf_token()}}"> 
             
{!!Form::open(['route' => 'informante.store', 'method' => 'POST'])!!}

   
    
          @include('informante.form.form_informante')

{!!Form::submit('Registrar',['accept-charset'=>"UTF-8",'class' => 'btn btn-primary','style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%'])!!}


{!!Form::close()!!}
         </div>
        </div>
       </div>
   </section>


<section>

 <div id="seccion_informante" class="row" style=" float:left;margin-left: 275px; width: 1030px; background-color:white;  border-top:5px solid black; height: 380px; margin-top: 10px;font-family:Verdana, Arial, Helvetica, sans-serif;color: black;border-style: groove;">  

<meta name="csrf-token" content="{{ csrf_token() }}" />

        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none; margin-top: 20px;margin-left: 400px;margin-right: 200px">
        <strong> Informantes Agregados Correctamente.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"  style="margin-right: 15px;" ><span aria-hidden="true">&times;</span></button>
        </div>

         <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none;
         margin-top: 20px;margin-left: 400px;margin-right: 200px">
         <strong> No se agregaron los Informantes correctamente.</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"  style="margin-right: 15px;" ><span aria-hidden="true">&times;</span></button>
         </div>

          <label class="box-title" style="margin-top: 70px;font-size: 22px;margin-left: 30%">Cargar Datos de Informantes</label>
                     
          <form  route='informante.cargar_datos_informante' id="f_cargar_datos_informante" name="f_cargar_datos_informante" method="post"  action="cargar_datos_informante" class="formarchivo" enctype="multipart/form-data"  files="true">                
         <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>" id="token"> 

      
      
         <label style="margin-top: 25px;font-size: 20px;margin-left: 10%">Agregar Archivo de Excel </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  style="margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 10%;width: 800px"   required/><br /><br />
     

     
          <button type="submit" class="btn btn-success" style="margin-top:2px;font-size: 16px;margin-left: 70%">Cargar Datos</button>

  
    </form>


{!!Html::script("js/jquery.min.js")!!}

{!!Html::script("js/sistemalaravel1.js")!!}



 </div>


</section>

@stop