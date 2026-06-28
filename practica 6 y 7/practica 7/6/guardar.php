<?php  
session_start(); 
?> 
<html> 
<head> 
    <title>Sessiones</title> 
</head> 
<body> 
    <?php 
    include ("conexion.inc"); 
    $mail= $_POST['mail']; 
    $Sql = "
    select *  
    FROM alumnos 
    WHERE mail ='$mail' 
    "; 

    $Resultado = mysqli_query($link, $Sql) or die (mysqli_error($link)); 
    $fila = mysqli_fetch_array($Resultado); 
    if(mysqli_num_rows($Resultado) == 0) { 
        echo ("Usuario Inexistente...!!! <br>"); 
    } 
    else{ 
        $_SESSION['usuario']= $fila['nombre']; 
    } 
    ?> 
<a href="pagina3.php">Ingresar a la pagina/a>; 
</body> 
</html>