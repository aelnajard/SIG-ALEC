  <section>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="opacity: 0.96">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="font-family:Arial, sans-serif" id="myModalLabel"><strong>LOCALIDAD</strong></h4>
      </div>
      <div class="modal-body">      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">    
     <div class="form-group">
     <input type="hidden" name="_token" value="{{csrf_token()}}">          
  {!!Form::label('nombre','Id Localidad: ')!!}
  {!!Form::text('nombres_informante',null, ['id'=>'nombres_informante','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}   
               
  {!!Form::label('nombre','Nombre: ')!!}
  {!!Form::text('nombre',null, ['id'=>'nombre','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Departamento: ')!!}
  {!!Form::text('departamen',null, ['id'=>'departamen','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}  

   {!!Form::label('nombre','Altura sobre el nivel de mar: ')!!}
  {!!Form::text('asnv',null, ['id'=>'asnv','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

     {!!Form::label('nombre','Temperatura: ')!!}
  {!!Form::text('temperatur',null, ['id'=>'temperatur','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

    {!!Form::label('nombre','Año Fundación: ')!!}
  {!!Form::text('anofundac',null, ['id'=>'anofundac','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Comentario: ')!!}
  {!!Form::text('comentario',null, ['id'=>'comentario','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Actividades Económicas: ')!!}
  {!!Form::text('actividade',null, ['id'=>'actividade','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Vias de Acceso: ')!!}
  {!!Form::text('viasdeacce',null, ['id'=>'viasdeacce','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Fecha Encuesta: ')!!}
  {!!Form::text('fechaencue',null, ['id'=>'fechaencue','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Fecha Complementaria: ')!!}
  {!!Form::text('fechacompl',null, ['id'=>'fechacompl','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}

   {!!Form::label('nombre','Observaciones: ')!!}
  {!!Form::text('observacio',null, ['id'=>'observacio','class'=>'form-control', 'placeholder' => '  '])!!}

  {!!Form::label('nombre','Página Web: ')!!}
  {!!Form::text('paginaweb',null, ['id'=>'paginaweb','class'=>'form-control', 'placeholder' => '  '])!!}


    </div>



      </div>
      <div class="modal-footer" style="background-color: 898594">
      
      </div>
    </div>
  </div>
</div>
</section>



<section>




  <div class="modal fade" id="moModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="color: white;background-color: rgba(0,0,0,0.8); width: 400px; margin-left: 100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Campos Semanticos</h4>
      </div>
      <div class="modal-body">      
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <input type="hidden" id="id">  
 
  <div id="div1"> 
  @foreach($camposema as $category)
    <style type="text/css">
   #mytables{
   color:white;
   margin-left: 60px;
      }
</style>
@endforeach
  
</div>

      </div>
      <div class="modal-footer">
      
      </div>
    
    </div>
  </div>
</div>



</section>

































