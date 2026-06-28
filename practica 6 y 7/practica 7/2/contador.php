<?php
if(isset($_COOKIE["contador"])){
    $contador = $_COOKIE["contador"] + 1;
    setcookie("contador",$contador,time()+60*60*24*30);
    echo "Has visitado esta página ".$contador." veces.";
}else{
    $contador = 1;
    setcookie("contador",$contador,time()+60*60*24*30);
    echo "Bienvenido. Es la primera vez que visitas esta página.";
}
?>