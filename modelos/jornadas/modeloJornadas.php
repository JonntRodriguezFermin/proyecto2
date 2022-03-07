<?php

require_once realpath(__DIR__ . '/..') . '/conexion/conexion.php';



/**

 * 

 */

class DatosJornada extends Conexion{

    public static function modeloListarJornadas($tabla) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");  

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }


    public static function modeloCrearJornada($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("INSERT INTO jornada(fecha, hora_inicio, hora_cierre, clima, precio_mercancia) VALUES (:fecha,:hInicio,:hcierre,:clima,:precio)");

        $stmt->bindParam(':fecha', $datos['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(':hInicio', $datos['hora_i'], PDO::PARAM_STR);
        $stmt->bindParam(':hcierre', $datos['hora_c'], PDO::PARAM_STR);
        $stmt->bindParam(':clima', $datos['clima'], PDO::PARAM_INT);
        $stmt->bindParam(':precio', $datos['precio'], PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "REGISTRO_EXT";
        } else { 
            return $stmt->errorInfo();
        }

        $stmt->close();

    }

       public static function modeloObtenerJornada($tabla, $dato) {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id ");  
        $stmt->bindParam(':id', $dato, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

    }


     public static function modeloActualizarJornada($tabla, $datos) {

        $stmt = Conexion::conectar()->prepare("UPDATE jornada SET fecha=:fecha,hora_inicio=:horai,hora_cierre=:horac,clima=:clima,precio_mercancia=:precio WHERE id = :id");

        $stmt->bindParam(':fecha', $datos['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(':horai', $datos['hora_i'], PDO::PARAM_STR);
        $stmt->bindParam(':horac', $datos['hora_c'], PDO::PARAM_STR);
        $stmt->bindParam(':clima', $datos['clima'], PDO::PARAM_INT);
        $stmt->bindParam(':precio', $datos['precio'], PDO::PARAM_INT);
        $stmt->bindParam(':id', $datos['id'], PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "ACTUALIZAR_EXT";
        } else { 
            return $stmt->errorInfo();
        }

        $stmt->close();

    }


    public static function modeloBorrarJornada($datosModelo, $tabla){

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