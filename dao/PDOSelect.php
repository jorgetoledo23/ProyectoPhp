<?php 

    require_once(MODEL . 'model.php');

    function selectSQL($query, $class){

        /* Conectar a una base de datos de MySQL invocando al controlador */
        require_once(DAO . 'conexion.php');

        $stmt = $gbd->prepare($query);
        $stmt->execute();

        $resultado = $stmt->fetchALL(PDO::FETCH_CLASS, $class);
        $stmt = null;
        return $resultado;
    }


?>