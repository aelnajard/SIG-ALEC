	<div class="form-group">
		{!!Form::label('nombre','Nombre:', ['style' => 'margin-top: 100px;font-size: 20px;margin-left: 30%'])!!}
		{!!Form::text('name',null,['class'=>'form-control','style' => 'margin-top: 10px;font-size: 20px; color:#0B0B61;margin-left: 30%;width: 800px','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:',  ['style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%'])!!}
		{!!Form::text('email',null,['class'=>'form-control', 'style' => 'margin-top: 10px;font-size: 20px; color:#0B0B61;margin-left: 30%;width: 800px', 'placeholder'=>'Ingresa el Correo del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:',['style' => 'margin-top: 15px;font-size: 20px;margin-left: 30%'])!!}
		{!!Form::password('password',['class'=>'form-control', 'style' => 'margin-top: 10px;font-size: 20px; color:#0B0B61;margin-left: 30%;width: 800px','placeholder'=>'Ingresa la contraseña del usuario'])!!}
	</div>
	