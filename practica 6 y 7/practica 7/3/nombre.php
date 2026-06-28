<?php
if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    setcookie("usuario",$usuario,time()+60*60*24*30);
}else{
    if(isset($_COOKIE["usuario"])){
        $usuario = $_COOKIE["usuario"];
    }else{
        $usuario = "";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Usuario</title>
</head>
<body>

<form method="post">
Usuario:
<input type="text" name="usuario" value="<?php echo $usuario; ?>">

<input type="submit" value="Guardar">

</form>

<?php

if(isset($_COOKIE["usuario"])){
    echo "<br>Último usuario ingresado: ".$_COOKIE["usuario"];
}

?>

</body>
</html>