<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios</h1>
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
            	 
            	 ?>
          </tbody>
        </table>
      </div>
