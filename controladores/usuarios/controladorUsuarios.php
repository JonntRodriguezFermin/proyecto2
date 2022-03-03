<?php 



ob_start();



/**

 * 

 */

class ControladorUsuario {


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
	              <td>'.$u['numero_telefono'].'</td>
	              <td>'.$u['email'].'</td>
	              <td></td>
	            </tr>
	            ';

		}

	}

}

 ?>