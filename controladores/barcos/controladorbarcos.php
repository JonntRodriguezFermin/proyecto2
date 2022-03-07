<?php 



ob_start();

/**
 * 
 */
class ControladorBarco 
{

	
	public static function controladorListadoBarcos(){

		$datosBarco = DatosBarco::modeloListarBarcos('barco');

		if (empty($datosBarco)) {
			echo '<tr>
					<td colspan="7" class="text-center p-4">No hay barco registrado aun</td>
			</tr>';
		} else {

			foreach ($datosBarco as $row => $b) {
		
			echo	'<tr>
		              <td>'.$b['id'].'</td>
		              <td>'.$b['nombre'].'</td>
		              <td>'.$b['identificacion'].'</td>
		              <td>'.$b['operador'].'</td>
		              <td>'.$b['tripulacion'].'</td>
		              <td>'.$b['capacidad'].'</td>
		              <td><a class="btn btn-success mr-1" href="index.php?action=editarBarco&id='.$b['id'].'"><i class="fa-solid fa-pen"></i></a>&nbsp;&nbsp;<a class="btn btn-danger mr-1" href="index.php?action=barcos&id='.$b['id'].'"><i class="fa-solid fa-trash-can"></i></a></td>
		            </tr>';

			}

		}

	}

	public static function controladorCrearBarco(){

		if (isset($_POST['nombre'])) {
			
			$datos = array( "nombre" => $_POST['nombre'],
							"codigo" => $_POST['codigo'],
							"operador" => $_POST['operador'],
							"tripulacion" => $_POST['tripulacion'],
							"capacidad" => $_POST['capacidad']
							 );

			$crearBarco = DatosBarco::modeloCrearBarco('barcos', $datos);

			if ($crearBarco == "REGISTRO_EXT") {
				
				header('location:index.php?action=registroBarcoExito');

			}else {

				echo '<div class="alert alert-error" role="alert">'.$crearBarco.'</div>';

			}


		}

	}


	public static function controladorEditarBarco(){

		$id = $_GET['id'];

		$datoB = DatosBarco::modeloObtenerBarco('barco', $id);

		echo ' <div class="row">
			          <div class="mb-3 col-md-4">
			            <label for="exampleInputEmail1" class="form-label">Nombre</label>
			            <input type="text" class="form-control" id="nombre" name="nombre" value="'.$datoB['nombre'].'">
			          </div>      
			        </div>		
			        <div class="row">
			             <div class="mb-3 col-md-6">
			            <label for="exampleInputEmail1" class="form-label">Codigo</label>
			            <input type="text" class="form-control" id="codigo" name="codigo" value="'.$datoB['identificacion'].'">
			          </div>
			          <div class="mb-3 col-md-6">
			            <label for="exampleInputPassword1" class="form-label">Operador</label>
			            <input type="text" class="form-control" id="operador" name="operador" value="'.$datoB['operador'].'">
			          </div>   
			        </div>
			        <div class="row">
			            <div class="mb-3 col-md-12">
			            <label for="exampleInputPassword1" class="form-label">Tripulacion</label>
			            <input type="text" class="form-control" id="tripulacion" name="tripulacion" value="'.$datoB['tripulacion'].'">
			          </div>     
			        </div>
			        <div class="row">
			             <div class="mb-3 col-md-6">
			            <label for="exampleInputEmail1" class="form-label">Capacidad</label>
			            <input type="text" class="form-control" id="capacidad" name="capacidad" value="'.$datoB['capacidad'].'">
			          </div>
			        <input type="hidden" id="idBarco" name="idBarco" value="'.$datoB['id'].'">
			        <hr>
			        <button type="submit" class="btn btn-primary">Actualizar</button> ';

	}


	public static function controladorActualizarbarco(){

		if (isset($_POST['nombre'])) {
			
			$datos = array( "nombre" => $_POST['nombre'],
							"codigo" => $_POST['codigo'],
							"operador" => $_POST['operador'],
							"tripulacion" => $_POST['tripulacion'],
							"capacidad" => $_POST['capacidad'],
							"id" => $_POST['idBarco']
							 );

			$editarBarco = DatosBarco::modeloActualizarBarco('barcos', $datos);

			if ($editarBarco == "EDICION_EXT") {
				
				header('location:index.php?action=edicionBarcoExito');

			}else {

				echo '<div class="alert alert-error" role="alert">'.$editarBarco.'</div>';

			}


		}

	}


	public static function controladorBorrarBarco(){

		if(isset($_GET["id"])){

			$DATOS_ELIMINAR = $_GET["id"];

			$RESPUESTA_ELIMINAR = DatosBarco::modeloBorrarBarco($DATOS_ELIMINAR, "barco");

			if($RESPUESTA_ELIMINAR == "Exitoso"){

				header("location:index.php?action=BarcoBorrado");

			}



		}



	}



}


?>