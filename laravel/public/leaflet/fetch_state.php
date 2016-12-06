<?php  
 //fetch_state.php  
 $connect = pg_connect("host=localhost dbname=Tesis user=postgres password=j123"); 
 $output = '';  
 $sql = "SELECT * FROM campo_semantico where id_tomo = '".$_POST["tomoId"]."' ORDER BY campo_semantico";  
 $result = pg_query($connect, $sql);  
 $output = '<option value="">Seleccione Campo Semantico</option>';  
 while($row = pg_fetch_array($result))  
 {  
      $output .= '<option value="'.$row["id_campo_semantico"].'">'.$row["campo_semantico"].'</option>';  
 }  
 echo $output;  
 ?>  