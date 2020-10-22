<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <?php

    $Nombre = 'Juanito';

  ?>


    <form class="form-signin" action="insert.php" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?php echo $Nombre ?></h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" name="correo" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recuerdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; App Web - 2020</p>
    </form>
</body>
</html>
