<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title></title>

    {!!Html::style("css/bootstrap.min.css")!!}
    {!!Html::style("css/metisMenu.min.css")!!}
    {!!Html::style("css/sb-admin-2.css")!!}
    {!!Html::style("css/font-awesome.min.css")!!}

</head>

<body>

  

        <div id="grad1">
        <nav class="Parte_Sup" role="navigation">
       

            <div class="navbar-header">
       
                <a class="titulo" href="{!!URL::to('/sig')!!}" style="text-decoration: none; float:left; color:white; font-family: georgia;">SIG-ALEC</a>

             <ul class="nav navbar-top-links navbar-right" style="margin-left:1220px; color:white;">
                 <li class="dropdon">
                    <a class="dropdown-inicio" style="color:black;font-family: 'Corben', Georgia, Times, serif; z-index:3000; width: 140px; height: 90px; text-decoration: none"  data-toggle="dropdown" href="#">
                   {!!Auth::user()->name!!} <br><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        
            </div>
        
        </nav>

        </div>
<!--Sidenav-->


    {!!Html::style("css/sidenav1.css")!!}


    
    
<body>

    <div id="mySidenav" class="sidenav" style="display: block;">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


  
  <!--CREACION DEL MENU IZQUIERDO-->
<!-- Fuentes de Google -->

    {!!Html::style("//fonts.googleapis.com/css?family=Open+Sans:400,700")!!}
   


    <!-- Iconos -->
   
    {!!Html::style("http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css")!!}

    <!-- Stylesheets -->
    
    {!!Html::style("leaflet/menu/style.css")!!}



 
    <!-- Contenedor -->
    <ul id="accordion" class="accordion" >
        
        <li><a href="#" style="background:black; margin-top:0px;"><i class="icono izquierda fa fa-home" ></i>&nbsp;&nbsp;Inicio <br></a></li>
        <li>
            <div class="link"><i class="fa fa-users fa-fw"></i>Usuario<i class="fa fa-chevron-down"></i></div>
             <ul class="submenu">

                <li><a href="{!!URL::to('/form_cargar_datos_usuarios')!!}">Adicionar<i  class="fa fa-chevron-down"></i></a></li>
                <li><a href="{!!URL::to('/usuario')!!}">Listar Usuarios</a></li>
             </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-user"></i>Informante<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="{!!URL::to('/informante/create')!!}">Adicionar</a></li>
                 <li><a href="{!!URL::to('/informante')!!}">Listar</a></li>

                
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-user"></i>Encuestador<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Adicionar</a></li>
                 <li><a href="#">Listar</a></li>

                
            </ul>
        </li>
        <li>
            <div class="link"><i class="fa fa-globe"></i>Mapa<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Adicionar</a></li>
                <li><a href="#">Listar</a></li>
            </ul>
        </li>
         <li>
            <div class="link"><i class="fa fa-map-marker"></i>Variante<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Adicionar</a></li>
                <li><a href="#">Listar</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="fa fa-plus"></i>Adición<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Adicionar</a></li>
                <li><a href="#">Listar</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="fa fa-book"></i>Suplemento<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
               <li><a href="#">Adicionar</a></li>
                <li><a href="#">Listar</a></li>              
            </ul>
        </li>

    </ul>
  <!-- Scripts -->
  {!!Html::script("leaflet/menu/js/jquery.min.js")!!}
  {!!Html::script("leaflet/menu/js/main.js")!!}
 
    
    
</div>

<span style="font-size:30px;cursor:pointer; top:115px; position: absolute; left:15px"  onclick="openNav()">&#9776;</span>




<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "275px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script>


{!!Html::style("css/style.css")!!}



{!!Html::script("js/jquery.min.js")!!}
{!!Html::script("js/bootstrap.min.js")!!}
{!!Html::script("js/metisMenu.min.js")!!}
{!!Html::script("js/sb-admin-2.js")!!}
{!!Html::script("js/informante.js")!!}




    
   

      <div>
    
          @yield('content')
          
        </div>

</body>

</html>
