<?php 



ob_start();



/**

 * 

 */

class ControladorUsuario {

	public static function controladorIngresoUsuario(){

		if (isset($_POST['cedulaIngreso']) && isset($_POST['passIngreso'])) {

			$datos = array("cedula" => $_POST['cedulaIngreso'],
						"password" => $_POST['passIngreso']);

			$ingresoUsuario = DatosUsuario::modeloIngresoUsuario('usuario', $datos);


			if ($ingresoUsuario != false) {
				
				session_start();
				
				$_SESSION['username'] = $ingresoUsuario['nombre'];
				$_SESSION['type'] = $ingresoUsuario['rol_usuario'];

				header('location:index.php');

			} else {

				header('location:ingreso.php?action=falloIngreso');

			}

		}

	}


	public static function controladorCrearUsuario() {

		if (isset($_POST['cedula'])) {
			
			$datos = array( "cedula" => $_POST['cedula'],
							"nombre" => $_POST['nombre'],
							"apellido" => $_POST['apellido'],
							"direccion" => $_POST['direccion'],
							"telefono" => $_POST['telefono'],
							"email" => $_POST['email'],
							"password" => $_POST['pass'],
							"tipo" => $_POST['tipoUsuario'] );

			$crearUsuario = DatosUsuario::modeloCrearUsuario('usuario', $datos);

			if ($crearUsuario == "REGISTRO_EXT") {
				
				header('location:index.php?action=registroUsuarioExitoso');

			}else {

				echo '<div class="alert alert-error" role="alert">'.$crearUsuario.'</div>';

			}

		}

	}

	public static function controladorListadoUsuarios() {

		$usuarios = DatosUsuario::modeloListarUsuarios('usuario');

		foreach ($usuarios as $row => $u) {
			
			echo '
				<tr>
	              <td>'.$u['id_usuario'].'</td>
	              <td>'.$u['nombre'].'</td>
	              <td>'.$u['apellido'].'</td>
	              <td>'.$u['cedula'].'</td>
	              <td>'.$u['direccion'].'</td>
	              <td>'.$u['telefono'].'</td>
	              <td>'.$u['email'].'</td>
	              <td><a class="btn btn-success mr-1" href="index.php?action=editarUsuario&id='.$u['id_usuario'].'"><i class="fa-solid fa-pen"></i></a>&nbsp;&nbsp;<a class="btn btn-danger mr-1" href="index.php?action=usuarios&id='.$u['id_usuario'].'"><i class="fa-solid fa-trash-can"></i></a></td>
	            </tr>
	            ';

		}

	}


	public static function controladorEditarUsuario(){

		$id = $_GET['id'];

		$datosu = DatosUsuario::modeloEditarUsuario($id, 'usuario');

		echo '<div class="row">
	          <div class="mb-3 col-md-4">
	            <label for="exampleInputEmail1" class="form-label">Cedula</label>
	            <input type="text" class="form-control" id="cedula" name="cedula" value="'.$datosu['cedula'].'">
	          </div>      
	        </div>
	        <div class="row">
	             <div class="mb-3 col-md-6">
	            <label for="exampleInputEmail1" class="form-label">Nombre</label>
	            <input type="text" class="form-control" id="userName" name="nombre" value="'.$datosu['nombre'].'">
	          </div>
	          <div class="mb-3 col-md-6">
	            <label for="exampleInputPassword1" class="form-label">Apellido</label>
	            <input type="text" class="form-control" id="lastname" name="apellido" value="'.$datosu['apellido'].'">
	          </div>   
	        </div>
	        <div class="row">
	            <div class="mb-3 col-md-12">
	            <label for="exampleInputPassword1" class="form-label">Direccion</label>
	            <input type="text" class="form-control" id="address" name="direccion" value="'.$datosu['direccion'].'">
	          </div>     
	        </div>
	        <div class="row">
	             <div class="mb-3 col-md-6">
	            <label for="exampleInputEmail1" class="form-label">Telefono</label>
	            <input type="text" class="form-control" id="userPhone" name="telefono" value="'.$datosu['telefono'].'">
	          </div>
	          <div class="mb-3 col-md-6">
	            <label for="exampleInputPassword1" class="form-label">Email</label>
	            <input type="email" class="form-control" id="userMail" name="email" value="'.$datosu['email'].'">
	          </div>   
	        </div>
	        <div class="row">
	             <div class="mb-3 col-md-6">
	            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
	            <input type="password" class="form-control" id="pass" name="pass" value="'.$datosu['password'].'">
	          </div>
	        </div>
	        <!-- Visible solo para usuarios Admin -->
	        <div class="row">
	             <div class="mb-3 col-md-6">
	            <label for="exampleInputEmail1" class="form-label">Tipo</label>
	            <select name="tipoUsuario" id="type" class="form-control" name="tipoUsuario">
	                    <option value="-1">Indique Nivel Usuario</option>
	                    <option value="0">Administrador</option>
	                    <option value="1">Cajero</option>
	            </select>
	          </div>
	        </div>
	        <input type="hidden" class="form-control" id="userID" name="id_usuario" value="'.$datosu['id_usuario'].'">
	        <hr>
	        <button type="submit" class="btn btn-primary">Actualizar</button> ';


	}


	public static function controladorActualizarUsuario(){

		if (isset($_POST['cedula'])) {
			
			$datos = array( "cedula" => $_POST['cedula'],
							"nombre" => $_POST['nombre'],
							"apellido" => $_POST['apellido'],
							"direccion" => $_POST['direccion'],
							"telefono" => $_POST['telefono'],
							"email" => $_POST['email'],
							"password" => $_POST['pass'],
							"tipo" => $_POST['tipoUsuario'],
							"id" => $_POST['id_usuario'] );

			$actualizarUsuario = DatosUsuario::modeloActualizarUsuario('usuario', $datos);

			if ($actualizarUsuario == "ACTUALIZACION_EXT") {
				
				header('location:index.php?action=actualizacionUsuarioExito');

			} else {

				echo '<div class="alert alert-error" role="alert">'.$actualizarUsuario.'</div>';

			}

		}

	}

	public static function controladorBorrarUsuario(){

		if(isset($_GET["id"])){

			$DATOS_ELIMINAR = $_GET["id"];

			$RESPUESTA_ELIMINAR = DatosUsuario::modeloBorrarUsuario($DATOS_ELIMINAR, "usuario");

			if($RESPUESTA_ELIMINAR == "Exitoso"){

				header("location:index.php?action=usuarioBorrado");

			}



		}



	}

}

 ?>