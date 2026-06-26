Confeccionar una página de Contacto que presente un formulario para que los visitantes 
puedan enviar consultas al webmaster. 

formulario.html:
    <body> 
        <form action="enviar.php" method="post"> 
            <fieldset> 
                <p><label> Nombre <input type="text" name="nombre" 
                size="25" /> </label></p> 
                <p><label> Email <input type="text" name="email" 
                size="25" /> </label></p> 
                Comentario 
                <p><label><textarea name="texto" cols="32" 
                rows="6"></textarea></label></p> 
                <input type="submit" value="Enviar"/> 
            </fieldset> 
        </form> 
    </body>

enviar.php:
    <body> 
        <?php 
            $fecha=date("d-m-Y"); 
            $hora= date("H :i:s"); 
            $destino="destino@gmail.com";
            $asunto="Comentario"; 
            $desde='From:' .$_POST['email']; 
            $comentario= " 
            \n 
            Nombre: $_POST[nombre]\n 
            Email: $_POST[email]\n 
            Consulta: $_POST[texto]\n 
            Enviado: $fecha a las $hora\n 
            \n 
            "; 
            mail($destino,$asunto,$comentario,$desde); 
            echo "Su consulta ha sido enviada, en breve recibirá nuestra 
            respuesta.";  
        ?>
    </body>