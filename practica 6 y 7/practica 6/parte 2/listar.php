<?php

include("conexion.php");

$sql="SELECT * FROM ciudades";

$resultado=mysqli_query($link,$sql);

echo "<table border='1'>";

while($fila=mysqli_fetch_array($resultado))
{

echo "<tr>";

echo "<td>".$fila["id"]."</td>";
echo "<td>".$fila["ciudad"]."</td>";
echo "<td>".$fila["pais"]."</td>";
echo "<td>".$fila["habitantes"]."</td>";
echo "<td>".$fila["superficie"]."</td>";
echo "<td>".$fila["tieneMetro"]."</td>";

echo "</tr>";

}

echo "</table>";

mysqli_free_result($resultado);

mysqli_close($link);

?>