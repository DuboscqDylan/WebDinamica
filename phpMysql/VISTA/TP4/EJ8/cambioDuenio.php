<?php
include_once("../../ESTRUCTURA/header.php");
?>
<div class="card-body">
    <form id="formCambioDuenio" name="formCambioDuenio" method="POST" action="../../ACCION/formAccion.php">
        <input type="hidden" name="accion" id="accion" value="tp4ej8">
        <label for="patente" class="form-label">Patente:</label>
        <input type="text" id="patente" name="patente" class="form-control" placeholder="Una patente">
        <label for="DniDuenio" class="form-label">DNI del nuevo dueño:</label>
        <input type="text" id="DniDuenio" name="DniDuenio" class="form-control" placeholder="Un DNI">
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" id="submit" class="btn btn-primary me-2" value="Buscar">
        </div>
    </form>
</div>
<?php
include_once("../../ESTRUCTURA/footer.php");
?>