<?php


    if(isset($_POST['descripcion'])){
        require_once(DAO . 'conexion.php');

        $stmt = $gbd->prepare('INSERT INTO tbl_categorias (descripcion) values (:descripcion)');
        $stmt->execute([
            'descripcion' => $_POST['descripcion'],
            ]);
        session_start();
        $_SESSION['msj'] = "Categoria almacenada con exito.";
            
        $host = $_SERVER['HTTP_HOST'];
        $ruta = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
        $url = "http://$host/$ruta/categorias.php";
        header("Location: $url");
        die();

    }


?>