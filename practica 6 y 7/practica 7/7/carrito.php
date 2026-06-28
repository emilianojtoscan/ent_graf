<?php
session_start();
include("conexion.php");

$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>

    <h2>Carrito de Compras</h2>
    <?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0){
    ?>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Acción</th>
        </tr>
        <?php
        foreach($_SESSION['carrito'] as $id => $cantidad)
        {
            $sql = "SELECT * FROM catalogo WHERE id = $id";
            $resultado = mysqli_query($link, $sql);
            $fila = mysqli_fetch_array($resultado);

            $subtotal = $fila['precio'] * $cantidad;
            $total += $subtotal;
            ?>

            <tr>
                <td><?php echo $fila['producto']; ?></td>
                <td>$<?php echo $fila['precio']; ?></td>
                <td><?php echo $cantidad; ?></td>
                <td>$<?php echo $subtotal; ?></td>

                <td>
                    <a href="eliminar.php?id=<?php echo $id; ?>">
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php } ?>

        <tr>
            <td colspan="3"><b>Total</b></td>
            <td colspan="2">$<?php echo $total; ?></td>
        </tr>

    </table>
    <?php } else
    { ?>
        <p>El carrito está vacío.</p>
    <?php } ?>
    <br>

    <a href="listar.php">Seguir comprando</a>
    <br><br>


</body>
</html>