<?php
include_once(dirname(__DIR__)."../../ESTRUCTURA/header.php");
?>
<div class="card-body">
    <form id="formModificarPersona" name="formModificarPersona" method="POST" action="/phpMysql/VISTA/ACCION/formAccion.php">
        <input type="hidden" name="accion" id="accion" value="tp4ej9Mod">
        <input type="hidden" id="NroDni" name="NroDni" value="<?= $persona->getNroDni() ?>" class="form-control">
        <label for="Apellido" class="form-label">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="<?= $persona->getApellido() ?>" class="form-control">
        <label for="Nombre" class="form-label">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="<?= $persona->getNombre() ?>" class="form-control">
        <label for="fechaNac" class="form-label">Fecha de nacimiento:</label>
        <input type="date" id="fechaNac" name="fechaNac" value="<?= $persona->getFechaNac() ?>" class="form-control">
        <label for="Telefono" class="form-label" >Telefono:</label>
        <input type="text" id="Telefono" name="Telefono" value="<?= $persona->getTelefono() ?>" class="form-control">
        <label for="Domicilio" class="form-label">Domicilio:</label>
        <input type="text" id="Domicilio" name="Domicilio" value="<?= $persona->getDomicilio() ?>" class="form-control">
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" id="submit" class="btn btn-primary me-2" value="Modificar">
        </div>
    </form>
</div>
<?php
include_once(dirname(__DIR__)."../../ESTRUCTURA/footer.php");
?>