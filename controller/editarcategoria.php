<?php

if(isset($_POST['descripcion'])){
    
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];

        require_once(DAO . 'conexion.php');

        $stmt = $gbd->prepare('UPDATE tbl_categorias SET descripcion = :descripcion WHERE categoriaid = :id');
        $stmt->execute([
            'descripcion' => $descripcion,
            'id' => $id,
            ]);
        session_start();
        $_SESSION['msj'] = "Categoria actualizada con exito.";
            
        $host = $_SERVER['HTTP_HOST'];
        $ruta = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
        $url = "http://$host/$ruta/categorias.php";
        header("Location: $url");
        die();

    }

    
?>