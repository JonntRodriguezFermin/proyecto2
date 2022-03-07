<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios</h1>
      </div>
      <div class="row">
        <div class="card mb-5" style="width: 18rem;">
          <div class="text-center">
            <img src="assets/img/users2.jpg" class="card-img-top" style="width: 60%;">
          </div>
          <div class="card-body text-center">
            <a href="crearUsuario" class="btn btn-primary">Agregar Nuevo Usuario</a>
          </div>
        </div>
      </div>
      <h2>Listado de Usuarios</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">cedula</th>
              <th scope="col">Direccion</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
              <th scope="col">Acctiones</th>
            </tr>
          </thead>
          <tbody>
            	<?php 

            	 $usuarios = new ControladorUsuario();
            	 $usuarios -> controladorListadoUsuarios();
               $usuarios -> controladorBorrarUsuario();
            	 
            	 ?>
          </tbody>
        </table>
      </div>
<?php

if (isset($_GET['action'])){


    if($_GET['action'] == 'actualizacionUsuarioExito'){

      echo '<br><br><div class="alert alert-success" role="alert">Se ha actualizado el usuario con exito</div>';

    }

    if($_GET['action'] == 'usuarioBorrado'){

      echo '<br><br><div class="alert alert-success" role="alert">Se ha borrado el usuario con exito</div>';

    }

  }

?>
