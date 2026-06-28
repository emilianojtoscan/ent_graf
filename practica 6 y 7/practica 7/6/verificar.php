<?php 
session_start(); 
?> 

<html> 
<head> 
<title>verificar</title> 
</head> 
<body> 
<?php 
if (isset($_SESSION['usuario'])) { 
    echo "Bienvenido ".$_SESSION['usuario']; 
} 
else { 
    echo "No tiene permitido visitar esta página."; 
} 
?>

<br><br>

<a href="guardar.php">Volver</a>
</body> 
</html>