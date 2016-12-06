@extends('layouts.principal')
	@section('content')

	<br><br>
		@include('alerts.errors')
	<br>
		@include('alerts.request')

		<div id=tabla2> 

				{!!Form::open(['route' => 'log.store', 'method' => 'POST'])!!}
   
				 <div class="form-group">
				 <br><br>

				 {!!Form::label('email','Correo de Usuario:',  ['style' => 'font-size: 20px; color:#0B0B61; margin-left: 30%'])!!}

				  <br><br>

				{!!Form::text('email',null,['class'=>'form-control', 'style' => 'margin-left:10px;
				margin-right: 10px;	width:370px;', 'placeholder'=>'Ingresa el Correo del usuario'])!!}

				</div>
   
				<div class="form-group">

				<br>
				{!!Form::label('password','Contraseña:',['style' => 'font-size: 20px;color:#0B0B61;
				margin-left: 30% '])!!}

				<br><br>

				{!!Form::password('password',['class'=>'form-control','style' => 'margin-left:10px;margin-right: 10px;	width:370px;','placeholder'=>'Ingresa la contraseña del usuario'])!!}
				
				<br> <br><br>
				 {!!Form::submit('Ingresar',['class' => 'btn btn-primary','style' => 'font-size: 24px;
				margin-left:10px;margin-right: 10px;width:370px;height: 55px;'])!!}

				<br>
				
				{!!Form::close()!!}


		</div> 
	
				

			
	@endsection	