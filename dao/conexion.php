<?php

        $dsn = 'mysql:dbname=proyectophp101;host=127.0.0.1';
        $usuario = 'root';
        $contraseña = '';

        try {
            $gbd = new PDO($dsn, $usuario, $contraseña);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }


?>