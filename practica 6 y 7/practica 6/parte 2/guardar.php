<?php

include("conexion.inc"); 

$ciudad = $_POST['ciudad']; 
$pais = $_POST['pais']; 
$habitantes = $_POST['habitantes']; 
$superficie = $_POST['superficie']; 
$metro = $_POST['metro'];



$sql="INSERT INTO ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
(
'$ciudad',
'$pais',
$habitantes,
$superficie,
$metro
)
";

mysqli_query($link,$sql);

mysqli_close($link);

?>