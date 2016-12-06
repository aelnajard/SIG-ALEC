  @extends('layouts.admin')

@section('content')



  @include('alerts.request')

{!!Form::open(['route' => 'usuario.store', 'method' => 'POST'])!!}
    
    @include('usuario.forms.usr')

       {!!Form::submit('Registrar',['class' => 'btn btn-primary','style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%'])!!}


{!!Form::close()!!}

<meta name="csrf-token" content="{{ csrf_token() }}" />

        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none; margin-top: 20px;margin-left: 400px;margin-right: 200px">
        <strong> Usuarios Agregados Correctamente.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"  style="margin-right: 15px;" ><span aria-hidden="true">&times;</span></button>
        </div>

         <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none;
         margin-top: 20px;margin-left: 400px;margin-right: 200px">
         <strong> No se agregaron los Usuarios correctamente.</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"  style="margin-right: 15px;" ><span aria-hidden="true">&times;</span></button>
         </div>

          <label class="box-title" style="margin-top: 70px;font-size: 22px;margin-left: 30%">Cargar Datos de Usuarios</label>
                     
          <form  route='usuario.cargar_datos_usuario' id="f_cargar_datos_usuarios" name="f_cargar_datos_usuarios" method="post"  action="cargar_datos_usuario" class="formarchivo" enctype="multipart/form-data"  files="true">                
         <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>" id="token"> 
      
      
         <label style="margin-top: 15px;font-size: 20px;margin-left: 30%">Agregar Archivo de Excel </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  style="margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 30%;width: 800px"   required/><br /><br />
     

     
                          <button type="submit" class="btn btn-primary" style="margin-top:2px;font-size: 20px;margin-left: 30%">Cargar Datos</button>

  
    </form>

    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    
   <script src="js/sistemalaravel.js"></script>




 

@stop
  