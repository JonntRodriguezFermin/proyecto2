<?php 



ob_start();

/**
 * 
 */
class ControladorJornada 
{

	
	public static function controladorListadoJornadas(){

		$datosJornada = DatosJornada::modeloListarJornadas('jornada');

		if (empty($datosJornada)) {
			echo '<tr>
					<td colspan="7" class="text-center p-4">No hay jornadas registradas aun</td>
			</tr>';
		} else {

			foreach ($datosJornada as $row => $j) {
		
			echo	'<tr>
		              <td>'.$j['id'].'</td>
		              <td>'.$j['fecha'].'</td>
		              <td>'.$j['hora_inicio'].'</td>
		              <td>'.$j['hora_cierre'].'</td>
		              <td>'.$j['clima'].'</td>
		              <td>'.$j['precio_mercancia'].'</td>
		              <td><a class="btn btn-success mr-1" href="index.php?action=editarJornada&id='.$j['id'].'"><i class="fa-solid fa-pen"></i></a>&nbsp;&nbsp;<a class="btn btn-danger mr-1" href="index.php?action=jornadas&id='.$j['id'].'"><i class="fa-solid fa-trash-can"></i></a></td>
		            </tr>';

			}

		}

	}

	public static function controladorCrearJornada(){

		if (isset($_POST['fecha'])) {
			
			$datos = array( "fecha" => $_POST['fecha'],
							"hora_i" => $_POST['horainicio'],
							"hora_c" => $_POST['horacierre'],
							"clima" => $_POST['clima'],
							"precio" => $_POST['preciocompra']
							 );

			$crearJornada = DatosJornada::modeloCrearJornada('jornada', $datos);

			if ($crearJornada == "REGISTRO_EXT") {
				
				header('location:index.php?action=registroJornadaExito');

			}else {

				echo '<div class="alert alert-error" role="alert">'.$crearJornada.'</div>';

			}


		}

	}


	public static function controladorEditarJornada(){

		$id = $_GET['id'];

		$datosJ = DatosJornada::modeloObtenerJornada('jornada', $id);

		echo '<div class="row">
	          <div class="mb-3 col-md-4">
	            <label for="exampleInputEmail1" class="form-label">Fecha</label>
	            <input type="date" class="form-control" id="fecha" name="fecha" value="'.$datosJ['fecha'].'">
	          </div>      
	        </div>
	        <div class="row">
	             <div class="mb-3 col-md-6">
	            <label for="exampleInputEmail1" class="form-label">Hora de Inicio</label>
	            <input type="text" class="form-control" id="horainicio" name="horainicio"  value="'.$datosJ['hora_inicio'].'">
	          </div>
	          <div class="mb-3 col-md-6">
	            <label for="exampleInputPassword1" class="form-label">Hora de cierre</label>
	            <input type="text" class="form-control" id="horacierre" name="horacierre" value="'.$datosJ['hora_cierre'].'">
	          </div>   
	        </div>
	        <div class="row">
	            <div class="mb-3 col-md-4">
	            <label for="exampleInputPassword1" class="form-label">Estado de clima</label>
	            <select class="form-control" id="clima" name="clima"> 
	                <option value="1">Indique Estado de clima</option>
	                <option value="1">Soleado</option>
	                <option value="2">Nublado</option>
	                <option value="3">Lluviso</option>
	                <option value="4">Tormenta</option>

	            </select>
	          </div>     
	        </div>
	        <div class="row">
	             <div class="mb-3 col-md-4">
	            <label for="exampleInputEmail1" class="form-label">precio de compra</label>
	            <input type="text" class="form-control" id="preciocompra" name="preciocompra" value="'.$datosJ['precio_mercancia'].'">
	          </div>  
	        </div>
	        <input type="hidden" id="idJornada" name="idJornada" value="'.$datosJ['id'].'">
	        <hr>
	        <button type="submit" class="btn btn-primary">Actualizar</button> ';

	}


	public static function controladorActualizarJornada(){

		if (isset($_POST['fecha'])) {
			
			$datos = array( "fecha" => $_POST['fecha'],
							"hora_i" => $_POST['horainicio'],
							"hora_c" => $_POST['horacierre'],
							"clima" => $_POST['clima'],
							"precio" => $_POST['preciocompra'],
							"id" => $_POST['idJornada']
							 );

			$actualizarJornada = DatosJornada::modeloActualizarJornada('jornada', $datos);

			if ($actualizarJornada == "ACTUALIZAR_EXT") {
				
				header('location:index.php?action=JornadaActualizadaExito');

			}else {

				echo '<div class="alert alert-error" role="alert">'.$actualizarJornada.'</div>';

			}


		}

	}


	public static function controladorBorrarJornada(){

		if(isset($_GET["id"])){

			$DATOS_ELIMINAR = $_GET["id"];

			$RESPUESTA_ELIMINAR = DatosJornada::modeloBorrarJornada($DATOS_ELIMINAR, "jornada");

			if($RESPUESTA_ELIMINAR == "Exitoso"){

				header("location:index.php?action=jornadaBorrada");

			}



		}



	}



}


?>