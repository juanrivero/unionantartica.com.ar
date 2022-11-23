<?php 
$link = mysql_connect('localhost','unionant_mr','6_YiV5{74vwk'); 
if (!$link) { 
    die('Sin conexion a MySQL: ' . mysql_error()); 
} 
echo 'Conneccion hecha OK'; mysql_close($link); 
?>
