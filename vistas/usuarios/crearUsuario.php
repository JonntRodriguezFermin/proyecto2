<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crear Usuario</h1>
</div>
<form action="" method="post"> 
        <div class="row">
          <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" >
          </div>      
        </div>
        <div class="row">
             <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="userName" name="nombre" >
          </div>
          <div class="mb-3 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="lastname" name="apellido">
          </div>   
        </div>
        <div class="row">
            <div class="mb-3 col-md-12">
            <label for="exampleInputPassword1" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="address" name="direccion">
          </div>     
        </div>
        <div class="row">
             <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="userPhone" name="telefono" >
          </div>
          <div class="mb-3 col-md-6">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" id="userMail" name="email">
          </div>   
        </div>
        <div class="row">
             <div class="mb-3 col-md-6">
            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="pass" name="pass" >
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
        <hr>
        <button type="submit" class="btn btn-primary">Confirmar</button> 
</form>
<?php 

        $crearUsuario = new ControladorUsuario();
        $crearUsuario -> controladorCrearUsuario();

        if (isset($_GET['action'])) {
                
                if ($_GET['action'] == "registroUsuarioExitoso") {
                        
                        echo '<div class="alert alert-success" role="alert">Se ha creado el usuario con exito</div>';

                }

        }
?>