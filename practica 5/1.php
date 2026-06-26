Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a 
través del servidor.  

<?php  
    $destinatario = "xx@xx.com";  
    $asunto = "Prueba";  
    $cuerpo = "  
    <html>
    <head>
        <title>Envio de mail</title>
    </head>
    <body>
        <h1>Hola!</h1>
        <p>Este es un correo electrónico enviado desde PHP.</p>
    </body>
    </html>
    ";

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: remitente@correo.com\r\n";
    mail($destinatario,$asunto,$cuerpo,$headers);
?> 
