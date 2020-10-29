<?php 

    require_once(MODEL . 'model.php');

    function selectSQL($query, $class){

        /* Conectar a una base de datos de MySQL invocando al controlador */
        $dsn = 'mysql:dbname=proyectophp2020;host=127.0.0.1';
        $usuario = 'root';
        $contraseña = '';

        try {
            $gbd = new PDO($dsn, $usuario, $contraseña);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        $stmt = $gbd->prepare($query);
        $stmt->execute();

        $resultado = $stmt->fetchALL(PDO::FETCH_CLASS, $class);
        $stmt = null;
        return $resultado;
    }


?>