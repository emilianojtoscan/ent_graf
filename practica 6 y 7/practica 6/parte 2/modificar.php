<?php

include("conexion.php");

$id = $_POST['id'];

$sql = "SELECT * FROM ciudades WHERE id='$id'";
$resultado = mysqli_query($link, $sql);

if(mysqli_num_rows($resultado) == 0){

    echo "Ciudad inexistente.<br>";
    echo "<a href='FormModificarIni.html'>Volver</a>";

}else{

    $fila = mysqli_fetch_array($resultado);

?>

<html>
<head>
    <title>Modificar Ciudad</title>
</head>

<body>

<form action="guardarModificar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <table>

        <tr>
            <td>Ciudad:</td>
            <td><input type="text" name="ciudad"
                value="<?php echo $fila['ciudad']; ?>"></td>
        </tr>

        <tr>
            <td>País:</td>
            <td><input type="text" name="pais"
                value="<?php echo $fila['pais']; ?>"></td>
        </tr>

        <tr>
            <td>Habitantes:</td>
            <td><input type="number" name="habitantes"
                value="<?php echo $fila['habitantes']; ?>"></td>
        </tr>

        <tr>
            <td>Superficie:</td>
            <td><input type="text" name="superficie"
                value="<?php echo $fila['superficie']; ?>"></td>
        </tr>

        <tr>
            <td>Tiene Metro:</td>
            <td><input type="text" name="metro"
                value="<?php echo $fila['tieneMetro']; ?>"></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Modificar">
            </td>
        </tr>

    </table>

</form>

</body>
</html>

<?php
}

mysqli_free_result($resultado);
mysqli_close($link);

?>