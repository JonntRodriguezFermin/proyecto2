<?php

require_once realpath(__DIR__ . '/..') . '/conexion/conexion.php';



/**

 * 

 */

class DatosUsuario extends Conexion{

	
	public static function modeloCrearUsuario($tabla, $datos) {

		$stmt = Conexion::conectar()->prepare("INSERT INTO usuario (nombre, apellido, cedula, direccion, telefono, email, password, rol_usuario) VALUES (:name,:lastname,:cedula,:address,:phone,:mail,:pass,:rol)");

		$stmt->bindParam(':name', $datos['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $datos['apellido'], PDO::PARAM_STR);
		$stmt->bindParam(':cedula', $datos['cedula'], PDO::PARAM_STR);
		$stmt->bindParam(':address', $datos['direccion'], PDO::PARAM_STR);
		$stmt->bindParam(':phone', $datos['telefono'], PDO::PARAM_STR);
		$stmt->bindParam(':mail', $datos['email'], PDO::PARAM_STR);
		$stmt->bindParam(':pass', $datos['password'], PDO::PARAM_STR);
		$stmt->bindParam(':rol', $datos['tipo'], PDO::PARAM_INT);

		
		if ($stmt->execute()) {
			return "REGISTRO_EXT";
		} else { 
			return $stmt->errorInfo();
		}

		$stmt->close();

	}


	public static function modeloIngresoUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE cedula = :cedula AND password = :pass ");	
		$stmt->bindParam(':cedula', $datos['cedula'], PDO::PARAM_STR);
		$stmt->bindParam(':pass', $datos['password'], PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	public static function modeloListarUsuarios($tabla) {

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}


	public static function modeloEditarUsuario($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_usuario = :id");

		$stmt->bindParam(":id", $datos, PDO::PARAM_INT);	

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}


	public static function modeloActualizarUsuario($tabla, $datos) {

		$stmt = Conexion::conectar()->prepare("UPDATE usuario SET nombre=:name,apellido=:lastname,cedula=:cedula,direccion=:address,telefono=:phone,email=:mail,password=:pass,rol_usuario=:rol WHERE id_usuario = :id");

		$stmt->bindParam(':name', $datos['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':lastname', $datos['apellido'], PDO::PARAM_STR);
		$stmt->bindParam(':cedula', $datos['cedula'], PDO::PARAM_STR);
		$stmt->bindParam(':address', $datos['direccion'], PDO::PARAM_STR);
		$stmt->bindParam(':phone', $datos['telefono'], PDO::PARAM_STR);
		$stmt->bindParam(':mail', $datos['email'], PDO::PARAM_STR);
		$stmt->bindParam(':pass', $datos['password'], PDO::PARAM_STR);
		$stmt->bindParam(':rol', $datos['tipo'], PDO::PARAM_INT);
		$stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);

		
		if ($stmt->execute()) {

			return "ACTUALIZACION_EXT";

		} else { 

			return $stmt->errorInfo();
			
		}

		$stmt->close();

	}


	public static function modeloBorrarUsuario($datosModelo, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = :id");

		$stmt->bindParam(":id", $datosModelo, PDO::PARAM_INT);

		if($stmt->execute()){

			return "Exitoso";

		}else{

			return $stmt->errorInfo();

		}

		$stmt->close();



	}

}

?>