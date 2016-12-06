@extends('layouts.principal')


     <div style="background-color:white;position: absolute; margin-top: 5px; margin-left: 1220px">



            <ul class="nav navbar-top-links navbar-right" style="background-color:white;">
                 <li class="dropdon">
                    <a class="dropdown-inicio" style="color: #6E6E6E;
                    font-family: 'Corben', Georgia, Times, serif; z-index:3000; width: 140px; height: 90px; text-decoration: none"  data-toggle="dropdown" href="#">
                    {!!Auth::user()->name!!}<br><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!!URL::to('/')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        
      </div>
	@section('content')


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="http://www.caroycuervo.gov.co/sites/default/files/faviconicc_0.ico" type="image/vnd.microsoft.icon" />
	<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
	<link rel="alternate" type="application/rss+xml" title="Instituto Caro y Cuervo RSS" href="http://www.caroycuervo.gov.co/rss.xml" />
	<title>SIG-ALEC:Instituto Caro y Cuervo</title>
    <meta name="Description" content="Entidad adscrita al Ministerio de Cultura. Investigació® £ientî§©ca en los campos de la lingð­³´ica, la filologî¡¬ la literatura, las humanidades y la historia de la cultura colombiana.">
    <meta name="Keywords" content="literatura, cultura, linguistica, diccionario, lenguas indigenas">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<!--// Biblioteca base de leaflet/-->
	
	<link rel="stylesheet" href="http://openlayers.org/en/v3.16.0/css/ol.css" type="text/css">
	<script src="http://openlayers.org/en/v3.16.0/build/ol.js" type="text/javascript"></script>
	<link rel="stylesheet" href="http://localhost:8080/geoserver/openlayers3/ol.css" type="text/css">
	 <script type="text/javascript" src="leaflet/OpenLayers-2.10/OpenLayers.js"></script>
	
<!--// Biblioteca base de leaflet/-->
	<link rel="stylesheet" href="leaflet/leaflet1.css" />
	<script src="leaflet/leafletjs.js"></script>
	
<!--// Dibujar/-->
	<script src="leaflet/leaflet/leaflet.draw/images/0.2.3/leaflet.draw-src.js"></script>
	<link rel="stylesheet" href="leaflet/leaflet.draw/0.2.3/leaflet.draw.css" />
	<script src="leaflet/leaflet.draw/0.2.3/leaflet.draw.js"></script>

<!--// Slide Menu//-->
	<script src="leaflet/Leaflet.SlideMenu-master/src/L.Control.SlideMenu.js"></script>
	<link rel="stylesheet" href="leaflet/Leaflet.SlideMenu-master/src/L.Control.SlideMenu.css" />
	<link rel="stylesheet" href="leaflet/font/font-awesome.min.css" />
	

<!--// Geocoder/-->
	<script src="leaflet/leaflet-control-osm-geocoder-master/Control.OSMGeocoder.js"></script>
	<link rel="stylesheet" href="leaflet/leaflet-control-osm-geocoder-master/Control.OSMGeocoder.css" />

<!--localizacion-->
	<script src="leaflet/localizacion/L.Control.Locate.min.js"></script>
	<link rel="stylesheet" href="leaflet/localizacion/L.Control.Locate.min.css" />
	
<!--PosiciÃ³n del Mouse-->
	<script src="leaflet/Leaflet.MousePosition-master/src/L.Control.MousePosition.js"></script>
	<link rel="stylesheet" href="leaflet/Leaflet.MousePosition-master/src/L.Control.MousePosition.css" />
	
<!--Barra de Navegacion-->
	<script src="leaflet/Leaflet.NavBar-master/src/Leaflet.NavBar.js"></script>
	<link rel="stylesheet" href="leaflet/Leaflet.NavBar-master/src/Leaflet.NavBar.css" />
	
	
<!--Letra-->
	<link rel="stylesheet" href="leaflet/font/font-awesome.min.css" />

<!--Barra de Navegacion-->
	<script src="leaflet/jquery/jquery.min.js"></script>
	
	
	
	
</head>
<body>

<!--// Posicion del Mapa//-->

	<div id="mapid"></div>
<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="leaflet/localidades_punto.js"></script>
	
<!--// Creación del mapa//-->
   
	<script src="leaflet/leafletjs.js"></script>
	<script src="leaflet/leaflet.draw/images/0.2.3/leaflet.draw-src.js"></script>
	<link rel="stylesheet" href="leaflet/leaflet.draw/0.2.3/leaflet.draw.css" />
	<script src="leaflet/leaflet.draw/0.2.3/leaflet.draw.js"></script>

	
		<!--Leaflet Search-->	
	<script src="leaflet/leaflet-search-master\src\leaflet-search.js"></script>
    <link rel="stylesheet" href="leaflet/leaflet-search-master\src\leaflet-search.css" />
	

	

<!--Herramientas para el mapa-->
	
	<script src="js\mapa.js"></script>

<!--Herramientas de Dibujo-->	
	
	<script src="js\dibujo.js"></script>

<!--Sidenav-->	

 <link rel="stylesheet" href="css/sidenav.css" />
	
	
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  
  <!--CREACION DEL MENU IZQUIERDO-->
<!-- Fuentes de Google -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Iconos -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="leaflet/menu/style.css">
 
	<!-- Contenedor -->
	<ul id="accordion" class="accordion">
		
		<li><a href="#" style="background:black; margin-top:0px;"><i class="icono izquierda fa fa-home" ></i>&nbsp;&nbsp;Inicio <br></a></li>
		<li>
			<div class="link"><i class="fa fa-list-alt"></i>Seleccionar<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				
				<li><a href="#">Tomo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="image"  src="leaflet/lista.png" style="width:20px; height:20px;"  onclick="mostrar();"></a></li>
				<li><a href="#">Campo Semántico&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="image"  src="leaflet/lista.png" style="width:20px; height:20px;"  onclick="mostrar1();"></a></li>
				<li><a href="#">Mapas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="image"  src="leaflet/lista.png" style="width:20px; height:20px;"  onclick="mostrar2();"></a></li>
				
				

			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-plus-square-o"></i>Administrar Capas<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Borrar</a></li>
				<li><a href="#">Adicionar</a></li>
				<li><a href="#">Ordenar</a></li>				
				<li><a href="#">Cambiar Color</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-file-image-o"></i>Exportar<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Imagen</a></li>
				<li><a href="#">Shapefile</a></li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-search"></i>Consultar<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Rango</a></li>
				<li><a href="#">Máximos/Minimos </a></li>
				<li><a href="#">Consulta Espacial</a></li>
				<li><a href="#">Busqueda Avanzada</a></li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-globe"></i>Analisis<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Area de Influencia</a></li>
				<li><a href="#">Union </a></li>
				<li><a href="#">Interseccion</a></li>
				<li><a href="#">Cortar</a></li>
				<li><a href="#">Disolver</a></li>
				
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-pencil"></i>Ingresar Laminas<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="{!!URL::to('/admin')!!}">Ingresar</a></li>
							
			</ul>
		</li>
	</ul>
  <!-- Scripts -->
	<script src="leaflet/menu/js/jquery.min.js"></script>
	<script src="leaflet/menu/js/main.js"></script>
    
    
</div>

<span style="font-size:30px;cursor:pointer; top:115px; position: absolute; left:15px; color:black;"  onclick="openNav()">&#9776;</span>




<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "275px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script>
 <link rel="stylesheet" href="css/style.css" />


@endsection	

