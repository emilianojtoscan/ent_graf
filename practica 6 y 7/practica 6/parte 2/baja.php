<?php 
include ("conexion.php"); 
$id = $_POST ['id']; 
$vSql = "SELECT * FROM ciudades WHERE id='$id' "; 
$vResultado = mysqli_query($link, $vSql); 
if(mysqli_num_rows($vResultado) == 0)  
    {  
    echo ("Ciudad Inexistente...!!! <br>"); 
    echo ("<A href='formBaja.php'>Continuar</A>"); 
} 
else{ 

$vSql= "DELETE FROM ciudades WHERE id = '$id' "; 
mysqli_query($link, $vSql); 
        echo("La ciudad fue borrada<br>"); 
        echo("<A href='index.php'>Volver al Menu del ABM</A>"); 
} 

mysqli_free_result($vResultado); 

mysqli_close($link); 
?>