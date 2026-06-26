Contar las páginas visitadas por un usuario durante su sesión.

cuenta.php:
    <?php 
        session_start();  
    ?> 
    <html> 
        <body> 
            <?php 
            if (!isset($_SESSION["contador"])){  
                $_SESSION["contador"] = 1;  
            }else{  
                $_SESSION["contador"]++;  
            } ?>  
            <a href= "cant_visitas.php">Otra pagina</a> 
        </body> 
    </html>

cant_visitas.php:
    <?php  
    session_start(); 
    ?> 
    <html> 
        <body> 
            <a href="cuenta.php"></a>  
            <?php 
            echo "Has visitado " . ($_SESSION["contador"]) . " páginas";  
            ?>  
            <br>  
            <br>  
            <a href="cuenta.php">Otra página</a>  
        </body>  
    </html> 
