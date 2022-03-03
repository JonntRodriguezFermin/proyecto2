<?php 

/**
 * 
 */
class Conexion {

	public function conectar(){


		$dsn = 'mysql:dbname=amnca_db;host=localhost';
		$user = 'root';
		$pass ='';

		try {
		    $gbd = new PDO($dsn, $user, $pass);
		} catch (PDOException $e) {
		    echo 'Falló la conexión: ' . $e->getMessage();
		}


		return $gbd;
		
	}

}
	


 ?>