<?php 

#if (isset($_SESSION)) {
#    header('location:login.php');
#}else{


    require_once 'controladores/mainController.php';
    require_once 'modelos/modeloRutas.php';

    require_once 'controladores/usuarios/controladorUsuarios.php';
    require_once 'modelos/usuarios/modeloUsuarios.php';

    $web = new MainController();
    $web -> setTemplate();

#}

 ?>