<?php

if(isset($_POST["titular"])){
    setcookie("titular",$_POST["titular"],time()+60*60*24*30);
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Configurar</title>
</head>
<body>
<form method="post">
    <input type="radio" name="titular" value="politica">
    Política
    <br>
    <input type="radio" name="titular" value="economia">
    Economía
    <br>
    <input type="radio" name="titular" value="deportes">
    Deportes
    <br><br>
    <input type="submit" value="Guardar">
</form>

</body>
</html>