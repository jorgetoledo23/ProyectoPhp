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
        <h1 class="card-header text-center">CATEGORIAS</h1>
        <h3>Agregar Categorias</h3>
        <hr>
        <form action="controller/guardarcategoria.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion de la Categoria</label>
                <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        



        <h3 class="mt-5">Listado de Categorias</h3>


        <?php
            require_once(DAO . 'PDOSelect.php');
            $Categorias = selectSQL('SELECT * FROM tbl_categorias','Categoria');
            //var_dump($Categorias);
        ?>

        <table class="table">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Descripcion</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Categorias as $Cat) { ?>
                    <tr>
                        <td><?php echo $Cat->categoriaid ?></td>
                        <td><?php echo $Cat->descripcion ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        
        </table>



    </div>
    
    






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>