<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Sesión</title>
</head>
<body>

<h2>Datos almacenados en la sesión</h2>

<?php

echo "Usuario: " . $_SESSION["usuario"] . "<br>";
echo "Clave: " . $_SESSION["clave"] . "<br>";

?>

</body>
</html>