<?php
 
//conexiones, conexiones everywhere

$connect = pg_connect("host=localhost dbname=Tesis user=postgres password=j123"); 
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (!pg_connect($connect))
    die("No se pudo establecer conexión a la base de datos");

    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['sel_file']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' ';
         $chk_ext = explode(".",$fname);
         
         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");
        
             while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
             {
               //Insertamos los datos con los valores...
                $sql = "INSERT into mapa (id_mapa,numero_de_mapa,titulo_mapa,nombre_cientifico,frances,ingles,referencia_a_otros_atlas,id_campo_semantico) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
                pgl_query($sql) or die(pg_error());
             }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
             echo "Importación exitosa!";
             
         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
			//ver si esta separado por " , "
             echo "Archivo invalido!";
         }   
    }
     
    ?>