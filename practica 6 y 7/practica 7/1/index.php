<?php

if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];

    setcookie("estilo",$estilo,time()+60*60*24*30);

}else{

    if(isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
    }else{
        $estilo = "estilo1.css";
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo $estilo; ?>">
    <title>Estilos Session</title>
</head>

<body>

    <h2>Elegir estilo</h2>
    <form method="post">
        <select name="estilo">
            <option value="estilo1.css">Claro</option>
            <option value="estilo2.css">Oscuro</option>
        </select>
        <input type="submit" value="Guardar">
    </form>

    <h3>Esta página recuerda el estilo elegido mediante una cookie.</h3>

</body>

</html>