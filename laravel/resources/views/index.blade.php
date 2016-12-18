

    {!!Html::style("css1/bootstrap.min.css")!!}
    {!!Html::style("css1/bootstrap-theme.css")!!}
    {!!Html::style("css1/elegant-icons-style.css")!!}
    {!!Html::style("css1/font-awesome.css")!!}
    {!!Html::style("css1/style.css")!!}
    {!!Html::style("css1/style-responsive.css")!!}
	


	<br><br>
		

		<body class="login-img3-body">

				{!!Form::open(['route' => 'log.store', 'method' => 'POST' ,'class'=>'login-form' , 'action'=>'index.html'])!!}
   <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>             
				{!!Form::email('email',null,['class'=>'form-control', 'style' => 'margin-left:5px; width:265px;', 'placeholder'=>'Ingresa el Correo del usuario'])!!}
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!!Form::password('password',['class'=>'form-control','style' => 'margin-left:5px; width:265px;','placeholder'=>'Ingresa la contraseña del usuario'])!!}
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordarme
                <span class="pull-right"> <a href="#"> Olvido la Contraseña??</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Ingresar</button>
            <button class="btn btn-info btn-lg btn-block">Registrate</button>
       
        </div>

				
				{!!Form::close()!!}



</body>

@include('alerts.errors')
	<br>
		@include('alerts.request')
	


			
	<!-- Custom Theme files -->
{!!Html::script("js/jquery.min.js")!!}
{!!Html::script("js/bootstrap.min.js")!!}
{!!Html::script("js/metisMenu.min.js")!!}
{!!Html::script("js/sb-admin-2.js")!!}