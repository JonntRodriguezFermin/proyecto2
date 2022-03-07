<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crear Jornada</h1>
</div>
<form action="" method="post"> 
        <div class="row">
          <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" >
          </div>      
        </div>
        <div class="row">
             <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Hora de Inicio</label>
            <input type="text" class="form-control" id="horainicio" name="horainicio" >
          </div>
          <div class="mb-3 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Hora de cierre</label>
            <input type="text" class="form-control" id="horacierre" name="horacierre">
          </div>   
        </div>
        <div class="row">
            <div class="mb-3 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Estado de clima</label>
            <select class="form-control" id="clima" name="clima"> 
                <option value="1">Indique Estado de clima</option>
                <option value="1">Soleado</option>
                <option value="2">Nublado</option>
                <option value="3">Lluviso</option>
                <option value="4">Tormenta</option>

            </select>
          </div>     
        </div>
        <div class="row">
             <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label">precio de compra</label>
            <input type="text" class="form-control" id="preciocompra" name="preciocompra" >
          </div>  
        </div>

        <hr>
        <button type="submit" class="btn btn-primary">Confirmar</button> 
</form>
<?php 

        $crearJornada = new ControladorJornada();
        $crearJornada -> controladorCrearJornada();

        if (isset($_GET['action'])) {
                
                if ($_GET['action'] == "registroJornadaExito") {
                        
                        echo '<div class="alert alert-success" role="alert">Se ha creado la jornada con exito &nbsp; <a href="jornadas"><b>Volver</b></a</div>';

                }

        }
?>