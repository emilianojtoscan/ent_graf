<?php
$tipo = "";
if(isset($_COOKIE["titular"])){
    $tipo = $_COOKIE["titular"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clarin</title>
</head>
<body>

<h2>Noticias</h2>

<?php

if($tipo=="politica"){
    echo "<h3>Noticia política</h3>";

}elseif($tipo=="economia"){

    echo "<h3>Noticia económica</h3>";

}elseif($tipo=="deportes"){

    echo "<h3>Noticia deportiva</h3>";

}else{

    echo "<h3>Noticia política</h3>";
    echo "<h3>Noticia económica</h3>";
    echo "<h3>Noticia deportiva</h3>";

}

?>

<br>

<a href="configurar.php">Configurar titulares</a>

<br><br>

<a href="borrar.php">Borrar cookie</a>

</body>
</html>