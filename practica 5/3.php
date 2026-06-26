Escribir un script para que un visitante recomiende el sitio a un amigo. 

<?php
session_start();

if (isset($_POST["enviar"])) {
    $_SESSION["nombre"] = $_POST["nombre"];
    $destino = $_POST["email_amigo"];
    $asunto = "Recomendación de un sitio web";
    $mensaje = "Hola," . $_SESSION["nombre"] . " te recomienda visitar este sitio web https://www.sitioweb.com";

    $headers = "From: remitente@misitio.com";

    mail($destino, $asunto, $mensaje, $headers);

    echo "La recomendación fue enviada correctamente.";
}
?>


<html>
<head>
    <title>Recomendar a un amigo</title>
</head>
<body>

<form method="post" action="">
    Nombre del amigo:<br>
    <input type="text" name="nombre"><br><br>

    Email del amigo:<br>
    <input type="email" name="email_amigo"><br><br>

    <input type="submit" name="enviar" value="Enviar recomendación">
</form>

</body>
</html>

