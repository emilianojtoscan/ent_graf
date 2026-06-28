<?php

include("conexion.php");

$id = $_POST['id'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$metro = $_POST['metro'];

$sql = "UPDATE ciudades
SET
ciudad='$ciudad',
pais='$pais',
habitantes=$habitantes,
superficie=$superficie,
tieneMetro=$metro
WHERE id=$id";

mysqli_query($link, $sql);

echo "La ciudad fue modificada correctamente.<br>";
echo "<a href='Menu.html'>Volver al menú del ABM</a>";

mysqli_close($link);

?>