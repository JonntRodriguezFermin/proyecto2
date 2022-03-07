<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crear Barco</h1>
</div>
<form action="" method="post"> 
        <div class="row">
          <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >
          </div>      
        </div>
        <div class="row">
             <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" >
          </div>
          <div class="mb-3 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Operador</label>
            <input type="text" class="form-control" id="operador" name="operador">
          </div>   
        </div>
        <div class="row">
            <div class="mb-3 col-md-12">
            <label for="exampleInputPassword1" class="form-label">Tripulacion</label>
            <input type="text" class="form-control" id="tripulacion" name="tripulacion">
          </div>     
        </div>
        <div class="row">
             <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Capacidad</label>
            <input type="text" class="form-control" id="capacidad" name="capacidad" >
          </div>

        <hr>
        <button type="submit" class="btn btn-primary">Confirmar</button> 
</form>
<?php 

        $crearUsuario = new ControladorBarco();
        $crearUsuario -> controladorCrearBarco();

        if (isset($_GET['action'])) {
                
                if ($_GET['action'] == "registroBarcoExito") {
                        
                        echo '<div class="alert alert-success" role="alert">Se ha creado el barco con exito <a href="barcos"><b>Volver</b></a></div>';

                }

        }
?>