<?php 

    session_start();
    session_unset();
    session_destroy();
    $host = $_SERVER['HTTP_HOST'];
    $ruta = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
    $url = "http://$host/$ruta/productos.php";
    header("Location: $url"); 
    //echo 'Sesion Destruida';
    die();
?>