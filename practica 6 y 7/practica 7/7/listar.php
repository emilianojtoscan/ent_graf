<?php
session_start();
include("conexion.php");
$sql="
SELECT *
FROM catagolo
";
$resultado = mysqli_query($link,$sql);
?>
<h2>Catálogo</h2>
<table border="1">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th></th>
    </tr>
    <?php
    while($fila=mysqli_fetch_array($resultado))
    {
    ?>

    <tr>
        <td><?php echo $fila['producto']; ?></td>
        <td>$<?php echo $fila['precio']; ?></td>
    <td>
        <a href="agregar.php?id=<?php echo $fila['id']; ?>">
        Agregar al carrito
        </a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<br>
<a href="carrito.php">Ver carrito</a>