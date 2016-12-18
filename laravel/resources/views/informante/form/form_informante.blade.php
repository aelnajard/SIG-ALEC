	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<div class="form-group">
		{!!Form::label('nombre','Id Informante:', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('id_informante',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingrese el Id del Informante'])!!}
	</div>
	<div class="form-group">

		{!!Form::label('nombre','Id Localidad :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
	
	   	{!!Form::select('id_localidad',$localidad_form,null,[ 'accept-charset'=>"UTF-8",'id'=>'id_localidad','class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px;margin-left: 20%;width: 800px','placeholder'=>'Selecciona la Localidad del Informante']) !!}

	</div>



	<div class="form-group">
		{!!Form::label('nombre','Número Informante:', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::number('numero_informante',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingrese el Número de Informante'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('nombre','Nombres :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('nombres',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingresa los Nombres del Informante'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('nombre','Apellidos :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
		{!!Form::text('apellidos',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px','placeholder'=>'Ingresa los Apellidos del Informante'])!!}
	</div>




	<div class="form-group">
		{!!Form::label('email','Edad :',  ['style' => 'top: 15px;font-size: 14px;margin-left: 10%'])!!}
		{!!Form::number('edad',null,['class'=>'form-control', 'style' => 'top:10px;font-size: 14px; color:#0B0B61;margin-left: 20%;width: 800px', 'placeholder'=>'Ingresa la edad del Informante'])!!}
	</div>
	
	<div class="form-group">

		{!!Form::label('nombre','Género :', ['style' => 'top:0px;font-size:14px;margin-left: 10%'])!!}
	
	   	{!! Form::select('genero',['F','M'],null,['id'=>'genero','class'=>'form-control','style' => 'margin-top: 10px;font-size: 14px;margin-left: 20%;width: 800px','placeholder'=>'Selecciona el género del Informante']) !!}

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

	