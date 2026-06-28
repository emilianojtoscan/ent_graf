<?php
session_start();
$id = $_GET['id'];
if(isset($_SESSION['carrito'][$id]))
{
    $_SESSION['carrito'][$id]++;
}
else
{
    $_SESSION['carrito'][$id]=1;
}

header("Location: catalogo.php");
?>