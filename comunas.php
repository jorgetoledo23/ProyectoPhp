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
        include 'includes/menu.php'
    ?>

    <div class="container">
        <h1 class="card-header text-center">COMUNAS</h1>
        <hr>


        <?php
        
            require_once(DAO . 'PDOSelect.php');
            $Regiones = selectSQL('SELECT * FROM regiones','Region');
            //var_dump($Regiones);
        ?>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Region</label>
            </div>
            <select name="regiones" class="custom-select" id="regiones">
                <option selected>Choose...</option>
                <?php foreach($Regiones as $R) {?>
                    <option value="<?php echo $R->id?>"><?php echo $R->region?></option>
                <?php }?>
            </select>
        </div>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect02">Provincia</label>
            </div>
            <select name="provincias" class="custom-select" id="provincias">
                <option selected>Choose...</option>
            </select>
        </div>
        <hr>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect03">Comuna</label>
            </div>
            <select name="comunas" class="custom-select" id="comunas">
                <option selected>Choose...</option>
            </select>
        </div>


    </div>
    

    



    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/misJS.js"></script>

</body>
</html>