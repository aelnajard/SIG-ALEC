 <?php  
 function load_country()  
 {  
      $connect = pg_connect("host=localhost dbname=Tesis user=postgres password=j123"); 
      $output = '';  
      $sql = "SELECT * FROM tomo ORDER BY id_tomo";  
      $result = pg_query($connect, $sql);  
      while($row = pg_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["id_tomo"].'">'.$row["descripcion_tomo"].'</option>';  
      }  
      return $output;  
 }  
 ?>  
 <html>  
      <head>  
	  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="http://www.caroycuervo.gov.co/sites/default/files/faviconicc_0.ico" type="image/vnd.microsoft.icon" />
	<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
	<link rel="alternate" type="application/rss+xml" title="Instituto Caro y Cuervo RSS" href="http://www.caroycuervo.gov.co/rss.xml" />
	<title>SIG-ALEC:Instituto Caro y Cuervo</title>
    <meta name="Description" content="Entidad adscrita al Ministerio de Cultura. Investigació® £ientî§©ca en los campos de la lingð­³´ica, la filologî¡¬ la literatura, las humanidades y la historia de la cultura colombiana.">
    <meta name="Keywords" content="literatura, cultura, linguistica, diccionario, lenguas indigenas">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	
	<style type="text/css">
	body{
	margin:0;
	padding:0 0 0 0;
	z-index:2;
	}
	div#header1{
	position:absolute;
	z-index:1;
	top:5;
	left:0;
	width:100%;
	height:120px;
	background-color:#00abf0;
	color:#FFFFFF;
}
</style>


<!--// CreaciÃ³n de la parte superior Azul//-->

	<div id="header1" class="clearfix">
	

<!--// Creacion del titulo y estilo del SIG //-->
	
	<div style="
	position: absolute;
	
	left: 300px;
	top: 40px;
	z-index: 3;
	font-family: 'Lucida Grande',Verdana,Geneva,Lucida,Arial,Helvetica,sans-serif;
	font-size: 32px"> SISTEMA DE INFORMACIÓN GEOGRAFICA - ALEC </div>

	
<!--// Icono del ICC//--//-->

	<a style= 
	"position: absolute;
	left: 110px;  
	z-index:2;
	top:20;"><img typeof="floafoaf:Image" src="http://www.caroycuervo.gov.co/sites/all/themes/openpublic_icc/logo.png" alt=" logo" /></a> 

	

<!--// Posicion de las letras SIG//-->

	<p style=
	"position: absolute;
	left: 110px;
	z-index: 1;
	top: 80px;"> SIG ALEC </p>
	   
<br><br>
  
 
<!--// Color del fondo//-->

  <style type="text/css">
  body {
	  
    background-color:rgb(241, 241, 241);}
  </style>

	

	  
           
           <script src="jquery.min.js"></script>  
		    

 </head>  
      <body> 
	   <a   class="myButton" action="postgres.php">PASO NUMERO 1 </a>
  <br>   
           <h4 class="titulos">Seleccione Tomo 
           <select class="Tomo" name="tomo" id="tomo">  
                <option value="">Seleccione Tomo</option>  
                <?php echo load_country(); ?>  
           </select></h4>  
		     <a   class="myButton" action="postgres.php">PASO NUMERO 2 </a>
  <br>   
       
           <h4 class="titulos" >Seleccione Campo Semantico
           <select class="Tomo" name="campo_semantico" id="campo_semantico">  
                <option value="">Seleccione Campo Semantico</option>  
           </select></h5>    
     <a   class="myButton" action="postgres.php">PASO NUMERO 3 </a>
  <br>  

<form action="importar.php" enctype="multipart/form-data" method="post">
   <h4 class="titulos" >Seleccione Archivo CSV de los mapas a ingresar <br><br><input  class="Tomo" id="archivo" accept=".csv" name="archivo" type="file" /> </h4>
   <h4 class="titulos" ><input class="Tomo" name="MAX_FILE_SIZE" type="hidden" value="20000" /> </h4>
    <h4 class="titulos" > Importar Archivo CSV<input class="Tomo"  name="enviar" type="submit" value="Importar" /></h4>
</form>

  
<style>
 
.myButton {
	background-color:#00abf0;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
	margin-top:100px;
	margin-left:20px;

}


.Tomo {
	background-color:#FAFAFA;
	display:inline-block;
	cursor:pointer;
	color:#424242;
	font-family:Verdana;
	font-size:17px;
	padding:11px 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;	
	margin-left:20px;
	-webkit-border-radius:10px;
}
	
.titulos {
 	cursor:pointer;
	color:#424242;
	font-family:Verdana;
	margin-left: 400px;
	margin-top: 0px;

	}

 </style>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#tomo').change(function(){  
           var id_tomo = $(this).val();  
           $.ajax({  
                url:"fetch_state.php",  
                method:"POST",  
                data:{tomoId:id_tomo},  
                dataType:"text",  
                success:function(data)  
                {  
                     $('#campo_semantico').html(data);  
                }  
           });  
      });  
 });  
 </script>  