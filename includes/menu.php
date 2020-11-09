<div class="site-header">
    <nav class="container navbar navbar-expand-lg navbar-dark">
  
        <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="productos.php">PRODUCTOS</a>
                    <a class="dropdown-item" href="categorias.php">CATEGORIAS</a>
                    <a class="dropdown-item" href="comunas.php">COMUNAS</a>
                </div>
                </li>

                <?php 
                session_start();
                if(isset($_SESSION['usuariologueado'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hola <?php echo $_SESSION['usuariologueado'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="controller/cerrarsesion.php">Cerrar Sesion</a>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Registrarse</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>