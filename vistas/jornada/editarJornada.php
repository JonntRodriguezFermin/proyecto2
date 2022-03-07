<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modificar Jornada</h1>
</div>
<form action="" method="post"> 
        <?php 

        $editarJornada = new ControladorJornada();
        $editarJornada -> controladorEditarJornada();
        $editarJornada -> controladorActualizarJornada();

        ?>
</form>
<?php 
        if (isset($_GET['action'])) {
                
                if ($_GET['action'] == "") {
                        
                        echo '<div class="alert alert-success" role="alert">Se ha creado la jornada con exito &nbsp; <a href="jornadas"><b>Volver</b></a</div>';

                }

        }
?>