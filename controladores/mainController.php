<?php 



class MainController {

	public static function setTemplate() {

		include 'vistas/plantilla.php';

	}

	public static function setCajeroTemplate() {

		include 'vistas/plantillaCajero.php';

	}

	public static function routerController() {

		if(isset($_GET['action'])){

			$routeController = $_GET['action'];

		}else{

			$routeController = "";

		}

		$path = PageLinks::PageLinksModel($routeController);
		include $path;

	}

}


?>