<?php

require_once realpath(__DIR__ . '/..') . '/conexion/conexion.php';



/**

 * 

 */

class DatosBarco extends Conexion{

    public static function modeloListarBarcos($tabla) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");  

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }


    public static function modeloCrearBarco($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO barco(nombre, identificacion, operador, tripulacion, capacidad) VALUES (:nombre,:codigo,:operador,:tripulacion,:capacidad)");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':codigo', $datos['codigo'], PDO::PARAM_STR);
        $stmt->bindParam(':operador', $datos['operador'], PDO::PARAM_STR);
        $stmt->bindParam(':tripulacion', $datos['tripulacion'], PDO::PARAM_INT);
        $stmt->bindParam(':capacidad', $datos['capacidad'], PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "REGISTRO_EXT";
        } else { 
            return $stmt->errorInfo();
        }

        $stmt->close();

    }

       public static function modeloObtenerBarco($tabla, $dato) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id ");  
        $stmt->bindParam(':id', $dato, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

    }


     public static function modeloActualizarBarco($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("UPDATE barco SET nombre=:nombre,identificacion=:codigo,operador=:operador,tripulacion=:tripulacion,capacidad=:capacidad WHERE id = :id ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':codigo', $datos['codigo'], PDO::PARAM_STR);
        $stmt->bindParam(':operador', $datos['operador'], PDO::PARAM_STR);
        $stmt->bindParam(':tripulacion', $datos['tripulacion'], PDO::PARAM_INT);
        $stmt->bindParam(':capacidad', $datos['capacidad'], PDO::PARAM_INT);
        $stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "EDICION_EXT";
        } else { 
            return $stmt->errorInfo();
        }

        $stmt->close();

    }


    public static function modeloBorrarBarco($datosModelo, $tabla){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datosModelo, PDO::PARAM_INT);

        if($stmt->execute()){

            return "Exitoso";

        }else{

            return $stmt->errorInfo();

        }

        $stmt->close();



    }


}