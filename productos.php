<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/product.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbarexamples.css" rel="stylesheet">
</head>
<body>



    <?php
        include 'includes/menu.php';

        
        if(isset($_SESSION['usuariologueadorol'])){
            if($_SESSION['usuariologueadorol'] == 'admin'){ ?>

                <!-- TODO lo que el ADMIN puede ver y hacer -->

            <h1>PRODUCTOS</h1>





        <?php } else { ?> 
            <h1 class="card-header text-center">Usted no tiene Acceso al siguiente Recurso. Comuniquese con su
            Administrador.</h1>
        <?php }
    }else{ ?> 
            <h1 class="card-header text-center">Inicie Sesion para acceder a este recurso.</h1>
    <?php }  ?>    
    




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>