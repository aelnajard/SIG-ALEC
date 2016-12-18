@extends('layouts.admin')

@section('content')

<section style="margin-left: 275px; margin-top: 40px"> 
                    
  <div class="margin"  id="botones_control" >
        <button type="button" class="btn btn-primary" onclick="informante_mostrar();" > Editar Informante </button>

        <button type="button" class="btn btn-primary" onclick="camposeman_mostrar();">Editar Campos Semánticos</button>

       

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
             
{!!Form::model($informantess,['route' =>[ 'informante.update',$informantess->id_informante], 'method' => 'PUT'])!!}

      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<div class="form-group">
		{!!Form::label('nombre','Id Informante:', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('id_informante',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingrese el Id del Informante'])!!}
	</div>
	<div class="form-group">

		{!!Form::label('nombre','Id Localidad :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
	
	   	{!!Form::select('idlocalida',$localidad_form,null,[ 'accept-charset'=>"UTF-8",'id'=>'id_localidad','class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px;margin-left: 20%;width: 800px','placeholder'=>'Selecciona la Localidad del Informante']) !!}

	</div>

	<div class="form-group">
		{!!Form::label('nombre','Número Informante:', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::number('infomante',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingrese el Número de Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('nombre','Nombres :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('nombres_informante',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingresa los Nombres del Informante'])!!}
	</div>



	<div class="form-group">
		{!!Form::label('nombre','Apellidos :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('apellidos_informante',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingresa los Apellidos del Informante'])!!}
	</div>


	<div class="form-group">
		{!!Form::label('email','Edad :',  ['style' => 'top: 15px;font-size: 14px;margin-left: 10%'])!!}
		{!!Form::number('edad_informante',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa la edad del Informante'])!!}
	</div>
	
	<div class="form-group">

		{!!Form::label('nombre','Género :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		
		{!!Form::text('genero',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa la Ocupación del Informante'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('email','Ocupación:',  ['style' => 'top: 15px;font-size: 14px;margin-left: 10%'])!!}
		{!!Form::text('ocupacion',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa la Ocupación del Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Nivel de Escolaridad :',  ['style' => 'top: 15px;font-size: 14px;margin-left: 10%'])!!}
		{!!Form::text('nivel_de_escolaridad',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa el nivel de escolaridad del Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Proveniencia :',  ['style' => 'top: 15px;font-size: 14px;margin-left: 10%'])!!}
		{!!Form::text('proveniencia',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa la Proveniencia del Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Proveniencia de los Padres :',  ['style' => 'top: 15px;font-size: 14px;margin-left: 10%'])!!}
		{!!Form::text('proveniencia_de_los_padres',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa la Proveniencia de los padres del Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('nombre','Provenciencia del Conyugue :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('proveniencia_del_conyugue',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingresa la Proveniencia del Conyugue del Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('nombre','Viajes :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('viajes',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingresa los Viajes del Informante'])!!}
	</div>

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
 


      
            <label class="radio-inline" style="margin-top: 15px;font-size: 15px; color:#0B0B61;margin-left: 20%;width: 800px">
 
    
 


	<table class="table table-hover" style="margin-left: 275px; width: 3500px; background-color: #FAFAFA; margin-top: 20px;margin-bottom: 20px; border-bottom: solid; font-size: 12px; border-top: solid;">
		<thead>
			<th>Id Informante</th>			
			<th>Nombres</th>	
			
		</thead>

  @foreach($informantesq as $categorys)  
		
		<tbody style="color: black;">
			<td>{{$categorys->id_informante}}</td>			
			<td>{{$categorys->campo_semantico}}</td>
			
			@endforeach  

</tbody>
</table>

         

           

            </label>
	



    
 
             
            
     </div><br>

{!!Form::submit('Registrar Informante',['accept-charset'=>"UTF-8",'class' => 'btn btn-primary','style' => 'margin-top: 45px;font-size: 20px;margin-left: 600px'])!!}



{!!Form::close()!!}


          


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

@stop