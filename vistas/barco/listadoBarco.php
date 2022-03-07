<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Barcos</h1>
      </div>
      <div class="row">
        <div class="card mb-5" style="width: 18rem;">
          <div class="text-center">
            <img src="assets/img/barco.jpg" class="card-img-top" style="width: 60%;">
          </div>
          <div class="card-body text-center">
            <a href="crearBarco" class="btn btn-primary">Agregar Nuevo Barco</a>
          </div>
        </div>
      </div>
      <h2>Listado de Barcos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Codigo</th>
              <th scope="col">Operador</th>
              <th scope="col">Tripulacion</th>
              <th scope="col">Capacidad (KG)</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            	<?php 

            	 $barcos = new ControladorBarco();
            	 $barcos -> controladorListadoBarcos();
               $barcos -> controladorBorrarBarco();
            	 
            	 ?>
          </tbody>
        </table>
      </div>
<?php

if (isset($_GET['action'])){


    if($_GET['action'] == 'edicionBarcoExito'){

      echo '<br><br><div class="alert alert-success" role="alert">Se ha actualizado el barco con exito</div>';

    }

    if($_GET['action'] == 'BarcoBorrado'){

      echo '<br><br><div class="alert alert-success" role="alert">Se ha borrado el barco con exito</div>';

    }

  }

?>