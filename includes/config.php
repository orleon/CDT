<?php
   
$host = "54.191.0.81"; 
$user = "adempiere"; 
$pass = "adempiere"; 
$db = "BizOne"; 
$port = "5432";

$con = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT name FROM adempiere.c_period LIMIT 5"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
   $mensaje = $row[0] ;
  echo $mensaje;
} 

pg_close($con);  
/*
$destinatario = "orlando.leon.orue@gmail.com"; 
            $asunto = "Prueba";
            //para el envío en formato HTML 
            
            mail($destinatario,$asunto,$mensaje)  ;

            $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("orlando.leon.orue@gmail.com","My subject",$msg);
*/
?>