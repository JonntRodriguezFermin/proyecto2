<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Inicio</h1>
</div>
<div class="row">
  <div class="card mb-5 m-2" style="width: 18rem;">
    <div class="text-center">
      <img src="assets/img/users2.jpg" class="card-img-top" style="width: 60%;">
    </div>
    <div class="card-body text-center">
      <a href="crearUsuario" class="btn btn-primary">Usuarios</a>
    </div>
  </div>
  <div class="card mb-5 m-2" style="width: 18rem;">
    <div class="text-center">
      <img src="assets/img/jornada-laboral.png" class="card-img-top" width="150" height="155" >
    </div>
    <div class="card-body text-center">
      <a href="crearJornada" class="btn btn-primary">Jornadas</a>
    </div>
  </div>
  <div class="card mb-5 m-2" style="width: 18rem;">
          <div class="text-center">
            <img src="assets/img/barco.jpg" class="card-img-top" style="width: 65%;">
          </div>
          <div class="card-body text-center">
            <a href="crearBarco" class="btn btn-primary">Barcos</a>
          </div>
        </div>
  <div class="card mb-5 m-2" style="width: 18rem;">
          <div class="text-center">
            <img src="assets/img/financial.jpg" class="card-img-top" >
          </div>
          <div class="card-body text-center">
            <a href="crearBarco" class="btn btn-primary">Facturas</a>
          </div>
        </div>
</div>

<h2>Ultimas Jornadas</h2>
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
<hr>
<h2>Barcos Registrados</h2>
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
