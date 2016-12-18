@extends('layouts.admin')
  @section('content')
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<br><br>

<section style="margin-left: 275px"> 
                    
  <div class="margin"  id="botones_control" >
        <button type="button" class="btn btn-primary" onclick="informante_mostrar();" >
             Agregar  Informante
        </button>

        <button type="button" class="btn btn-primary" onclick="camposeman_mostrar();">Agregar Campos Semánticos</button>


  </div>
</section>


  <section> 

<div id="seccion_localidad" class="row" style="float:left;margin-left: 275px; width: 1030px; background-color:white;  border-top:5px solid black; height: 1180px; margin-top: 10px;font-family:Verdana, Arial, Helvetica, sans-serif;color: black;border-style: groove;">  

           <div class="col-md-4" ><br><br>
 
              <div class="box box-primary">
                        
                     <div class="box-header" style="width:500px; margin-left: 300px;">
                          <h3 class="box-title">Ingrese los Datos del Informante </h3><br><br><br>
                     </div><!-- /.box-header -->

  <input type="hidden" name="_token" value="{{csrf_token()}}"> 
             
{!!Form::open(['route' => 'informante.store', 'method' => 'POST'])!!}

   
    
          @include('informante.form.form_informante')




         </div>
        </div>
       </div>
   </section>


 

<div id="seccion_campo_semantico" class="row" style="float:left;margin-left: 275px; width: 1030px; background-color:white;  border-top:5px solid black; height: 1200px; margin-top: 10px;font-family:Verdana, Arial, Helvetica, sans-serif;color: black;border-style: groove; display: none;">  

           <div class="col-md-4" ><br><br>
 
              <div class="box box-primary">
                        
                       
                     <div class="box-header" style="width:500px; margin-left: 300px;">
                          <h3 class="box-title">Seleccione Campo Semántico </h3><br><br>
                     </div><!-- /.box-header --><br>

  <input type="hidden" name="idinf" value="{{csrf_token()}}"> 
             


    
    

          <div class="form-group" style="display: inline-block;margin-left: 100px ">
     
 <input type="hidden" name="idcs" value="{{csrf_token()}}"> 
     @foreach($camposema as $category)
            <label class="radio-inline" style="margin-top: 15px;font-size: 15px; color:#0B0B61;margin-left: 20%;width: 800px">

                <input type="checkbox" name="id_campo_semantico[]" id="{{$category->id_campo_semantico}}" class="form-control" value="{{$category->id_campo_semantico}}" style="display: inline-block; width: 40px; height: 23px" > {{$category->id_campo_semantico}} : {{$category->campo_semantico}} 

            </label>
            @endforeach
     </div><br>


{!!Form::submit('Registrar Informante',['accept-charset'=>"UTF-8",'class' => 'btn btn-primary','style' => 'margin-top: 45px;font-size: 20px;margin-left: 600px'])!!}


{!!Form::close()!!}
         </div>
        </div>
       </div>
   </section>


<section>

 <div id="seccion_informante" class="row" style=" float:left;margin-left: 275px; width: 1030px; background-color:white;  border-top:5px solid black; height: 380px; margin-top: 10px;font-family:Verdana, Arial, Helvetica, sans-serif;color: black;border-style: groove;display: none">  

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

      <div class="box-header" style="width:500px; margin-left: 300px;margin-top: 40px">
                          <h3 class="box-title">Seleccione Archivo Excel </h3><br><br><br>
                     </div>
                     
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