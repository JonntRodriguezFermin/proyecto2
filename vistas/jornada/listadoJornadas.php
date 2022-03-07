<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jornadas</h1>
      </div>
      <div class="row">
        <div class="card mb-5" style="width: 18rem;">
          <div class="text-center">
            <img src="assets/img/jornada-laboral.png" class="card-img-top" style="width: 80%;">
          </div>
          <div class="card-body text-center">
            <a href="crearJornada" class="btn btn-primary">Agregar Nueva jornada</a>
          </div>
        </div>
      </div>
      <h2>Listado de Jornadas</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">fecha</th>
              <th scope="col">Hora de Inicio</th>
              <th scope="col">Hora de cierre</th>
              <th scope="col">Estado de clima</th>
              <th scope="col">Precio de compra</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            	<?php 

            	 $jornadas = new ControladorJornada();
            	 $jornadas -> controladorListadoJornadas();
               $jornadas -> controladorBorrarJornada();
            	 
            	 ?>
          </tbody>
        </table>
      </div>
 <?php

if (isset($_GET['action'])){


    if($_GET['action'] == 'JornadaActualizadaExito'){

      echo '<br><br><div class="alert alert-success" role="alert">Se ha actualizado la jornada con exito</div>';

    }


    if($_GET['action'] == 'jornadaBorrada'){

      echo '<br><br><div class="alert alert-success" role="alert">Se ha borrado la jornada con exito</div>';

    }

}

?>