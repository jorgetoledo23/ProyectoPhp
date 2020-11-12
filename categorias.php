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
        <!-- Awesonme Icons -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <?php
        include 'includes/menu.php'
    ?>

    <div class="container">
        <h1 class="card-header text-center">CATEGORIAS</h1>
        <h3>Agregar Categorias</h3>
        <hr>
        <?php 
          if(isset($_SESSION['msj'])){ ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['msj']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php  } 
        unset($_SESSION['msj']); ?>

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
                    <td>Opciones</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Categorias as $Cat) { ?>
                    <tr>
                        <td><?php echo $Cat->categoriaid ?></td>
                        <td><?php echo $Cat->descripcion ?></td>
                        <td><button onclick="editarCat(<?php echo $Cat->categoriaid ?>)" id="editarCat" class="btn" href=""><i class="fas fa-edit"></i></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        
        </table>



    </div>



    <div id="editModal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


            <div id="Error" style="display:none;" class="alert alert-danger alert-dismissible fade show" role="alert">
                Error al intentar actualizar la Categoria
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <div class="modal-header">
                <h5 class="modal-title">Editando la Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="formEdit" action="controller/editarcategoria.php" method="POST" onsubmit="return false">
            <input id="categoriaid" type="text" name="id" readonly hidden>
                <div class="form-group">
                    <label for="descripcion">Descripcion de la Categoria</label>
                    <input type="text" name="descripcion" class="form-control" id="descripcion" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save Changes" onclick="editarCategoriaAjax()"/>
            </div>
            </form>

            </div>
            
            </div>
        </div>
    </div>
    
    






    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/misJS.js"></script>
</body>
</html>