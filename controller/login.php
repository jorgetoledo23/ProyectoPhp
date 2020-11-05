<?php 
    if(isset($_POST['correo']) && isset($_POST['pass'])){
        $correo = $_POST['correo'];
        $pass = $_POST['pass'];

        require_once(DAO . 'PDOSelect.php');

        $user = selectSQL("SELECT * FROM tbl_usuarios WHERE correo = '$correo' AND pass='$pass' LIMIT 1", 'Usuario');
        //var_dump($usuarios);

        if(isset($user)){
            //USUARIO VÀLIDO
            $u = $user[0];
            session_start();
            $_SESSION['usuariologueado'] = $u->nombres;
            $host = $_SERVER['HTTP_HOST'];
            $ruta = rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
            $url = "http://$host/$ruta/productos.php";
            header("Location: $url");
            die();
        }

    }
?>