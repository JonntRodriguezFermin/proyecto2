<?php 

/**
 * 
 */
class PageLinks {
	
	public static function PageLinksModel($LinksModel) {

		//usuarios

		if ($LinksModel == "usuarios") {

			$modulo = "vistas/usuarios/listadoUsuarios.php";

		}elseif ($LinksModel == "crearUsuario") {

			$modulo = "vistas/usuarios/crearUsuario.php";

		}elseif ($LinksModel == "registroUsuarioExitoso") {

			$modulo = "vistas/usuarios/crearUsuario.php";

		}elseif ($LinksModel == "editarUsuario") {

			$modulo = "vistas/usuarios/editarUsuarios.php";

		}elseif ($LinksModel == "actualizacionUsuarioExito") {

			$modulo = "vistas/usuarios/listadoUsuarios.php";

		}elseif ($LinksModel == "usuarioBorrado") {

			$modulo = "vistas/usuarios/listadoUsuarios.php";

		//jornadas

		}elseif ($LinksModel == "jornadas") {

			$modulo = "vistas/jornada/listadoJornadas.php";

		}elseif ($LinksModel == "crearJornada") {

			$modulo = "vistas/jornada/crearJornada.php";

		}elseif ($LinksModel == "registroJornadaExito") {

			$modulo = "vistas/jornada/crearJornada.php";

		}elseif ($LinksModel == "editarJornada") {

			$modulo = "vistas/jornada/editarJornada.php";

		}elseif ($LinksModel == "JornadaActualizadaExito") {

			$modulo = "vistas/jornada/listadoJornadas.php";

		}elseif ($LinksModel == "jornadaBorrada") {

			$modulo = "vistas/jornada/listadoJornadas.php";

		//barcos

		}elseif ($LinksModel == "barcos") {

			$modulo = "vistas/barco/listadoBarco.php";

		}elseif ($LinksModel == "crearBarco") {

			$modulo = "vistas/barco/crearBarco.php";

		}elseif ($LinksModel == "registroBarcoExito") {

			$modulo = "vistas/barco/crearBarco.php";

		}elseif ($LinksModel == "editarBarco") {

			$modulo = "vistas/barco/editarBarco.php";

		}elseif ($LinksModel == "edicionBarcoExito") {

			$modulo = "vistas/barco/listadoBarco.php";

		}elseif ($LinksModel == "BarcoBorrado") {

			$modulo = "vistas/barco/listadobarco.php";

		}elseif ($LinksModel == "inicio") {

			$modulo = "vistas/home.php";


		} else {

			$modulo = "vistas/home.php";

		}

		return $modulo;

	}


}

 ?>