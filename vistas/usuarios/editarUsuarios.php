<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Usuario</h1>
</div>
<form action="" method="post"> 
	<?php 

	 $modificacion_usuario = new ControladorUsuario();
	 $modificacion_usuario -> controladorEditarUsuario();
	 $modificacion_usuario -> controladorActualizarUsuario();

	?>
</form>