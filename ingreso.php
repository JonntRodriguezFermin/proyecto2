<?php
  require_once 'controladores/usuarios/controladorUsuarios.php';
  require_once 'modelos/usuarios/modeloUsuarios.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Ingreso Alimentos Marinos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="css/estilosIngreso.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <main class="form-signin">
    <form action="" method="POST">
      <h1 class="h3 mb-3 fw-normal">Ingrese al Sistema</h1>

      <div class="form-floating pb-3">
        <input type="text" class="form-control" id="cedulaIngreso" name="cedulaIngreso" placeholder="15.123.456">
        <label for="floatingInput">Cedula Identidad</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="passIngreso" name="passIngreso" placeholder="Contraseña">
        <label for="floatingPassword">Contraseña</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    </form>
  </main>

  </body>
  <?php 

        $ingresoUsuario = new ControladorUsuario();
        $ingresoUsuario -> controladorIngresoUsuario();

        if (isset($_GET['action'])) {
                
                if ($_GET['action'] == "falloIngreso") {
                        
                        echo '<div class="alert alert-danger" role="alert">Identificacion o Contraseña incorrectos. Intente de nuevo</div>';

                }

        }
?>
</html>
