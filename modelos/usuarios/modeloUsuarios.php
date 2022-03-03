<?php

require_once realpath(__DIR__ . '/..') . '/conexion/conexion.php';



/**

 * 

 */

class DatosUsuario extends Conexion{

	
	public static function modeloListarUsuarios($tabla) {

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	

		$stmt->execute();

		return $stmt->fetchAll();

	}

}

?>