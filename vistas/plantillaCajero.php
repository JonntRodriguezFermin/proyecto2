<!DOCTYPE html>
<html>
<head>
    <title>Alimento Marinos</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!--<nav class="main-nav">
        <div class="logo">
            <a href="inicio">
                <img src="assets/img/my_logo.png" class="main-logo">
            </a>
            <span class="enterprise_name">
                Alimentos Marinos <br> Nueva Esparta C.A.
            </span>
        </div>
    </nav>
    <div class="content">
        <div class="side_bar">
            <ul class="side_menu">
                <li class="side_menu-element" ><a href="usuarios"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;Usuarios</a></li>
                <li class="side_menu-element" ><a href=""><i class="fa-solid fa-address-book"></i>&nbsp;&nbsp;Jornadas</a></li>
                <li class="side_menu-element" ><a href=""><i class="fa-solid fa-ship"></i>&nbsp;&nbsp;Barcos</a></li>
                <li class="side_menu-element" ><a href=""><i class="fa-solid fa-file-lines"></i>&nbsp;&nbsp;Facturas</a></li>
            </ul>
        </div>
        <div class="main_content">
        </div>
    </div>-->
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center" href="#">Alimentos Marinos C.A.</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Salir</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-5">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home">
              <span data-feather="home"></span>
              <i class="fa-solid fa-house-user"></i>&nbsp;Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil">
              <span data-feather="file"></span>
                <i class="fa-solid fa-user"></i> &nbsp;Mi Perfil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cajeroFactura">
              <span data-feather="bar-chart-2"></span>
              <i class="fa-solid fa-file-lines"></i>&nbsp;Facturas
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php 
            $web = new MainController();
            $web -> routerController();
         ?>
    </main>
  </div>
</div>

</body>
</html>