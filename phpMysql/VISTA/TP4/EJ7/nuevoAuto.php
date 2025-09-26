<?php
include_once("../../ESTRUCTURA/header.php");
?>
<div class="card-body">
    <form id="formNuevoAuto" name="formNuevoAuto" method="POST" action="../../ACCION/formAccion.php">
        <input type="hidden" name="accion" id="accion" value="tp4ej7">
        <label for="Patente" class="form-label">Patente:</label>
        <input type="text" id="Patente" name="Patente" class="form-control">
        <label for="Marca" class="form-label">Marca:</label>
        <input type="text" id="Marca" name="Marca" class="form-control">
        <label for="Modelo" class="form-label">Modelo:</label>
        <input type="text" id="Modelo" name="Modelo" class="form-control">
        <label for="DniDuenio" class="form-label">DNI del dueño:</label>
        <input type="text" id="DniDuenio" name="DniDuenio" class="form-control">
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" id="submit" class="btn btn-primary me-2" value="Buscar">
        </div>
    </form>
</div>
<?php
include_once("../../ESTRUCTURA/footer.php");
?>