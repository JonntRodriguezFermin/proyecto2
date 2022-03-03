<?php 

/**
 * 
 */
class PageLinks {
	
	public static function PageLinksModel($LinksModel) {

		if ($LinksModel == "usuarios") {

			$modulo = "vistas/usuarios/listadoUsuarios.php";

		}elseif ($LinksModel == "crearUsuario") {

			$modulo = "vistas/usuarios/crearUsuario.php";

		}elseif ($LinksModel == "jornadas") {

			$modulo = "vistas/jornada/listadoJornadas.php";

		} else {

			$modulo = "vistas/home.php";

		}

		return $modulo;


	}


}

 ?>