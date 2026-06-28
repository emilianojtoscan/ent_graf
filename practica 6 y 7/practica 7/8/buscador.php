<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Buscador de canciones</title>
</head>
<body>
    <h2>Buscador de Canciones</h2>
    <form method="post">
        Ingrese una canción:
        <input type="text" name="buscar">
        <input type="submit" value="Buscar">
    </form>
    <hr>
    <?php
    if(isset($_POST['buscar']))
    {
        $buscar = $_POST['buscar'];
        $sql = "SELECT * FROM buscador
                WHERE canciones LIKE '%$buscar%'";
        $resultado = mysqli_query($link,$sql);
        if(mysqli_num_rows($resultado)>0)
        {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Canción</th>";
            echo "</tr>";
            while($fila=mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['canciones']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "No se encontraron canciones.";
        }
    }
    ?>
</body>

</html>