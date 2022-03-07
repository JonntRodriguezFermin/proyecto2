<?php 

session_start();

if (!isset($_SESSION['username'])) {

    header('location:ingreso.php');

}else{

    require_once 'controladores/mainController.php';
    require_once 'modelos/modeloRutas.php';

    require_once 'controladores/usuarios/controladorUsuarios.php';
    require_once 'modelos/usuarios/modeloUsuarios.php';
    require_once 'controladores/jornadas/controladorJornadas.php';
    require_once 'modelos/jornadas/modeloJornadas.php';
    require_once 'controladores/barcos/controladorbarcos.php';
    require_once 'modelos/barcos/modeloBarcos.php';

    if ($_SESSION['type'] == "0") {
        $web = new MainController();
        $web -> setTemplate();
    } else {
        $web = new MainController();
        $web -> setCajeroTemplate();
    }

    


}

 ?>