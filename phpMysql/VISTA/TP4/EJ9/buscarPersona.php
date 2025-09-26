<?php
include_once("../../ESTRUCTURA/header.php");
?>
<div class="card-body">
    <form id="formCambioDuenio" name="formCambioDuenio" method="POST" action="../../ACCION/formAccion.php">
        <input type="hidden" name="accion" id="accion" value="tp4ej9">
        <label for="NroDni" class="form-label">DNI:</label>
        <input type="text" id="NroDni" name="NroDni" class="form-control">
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" id="submit" class="btn btn-primary me-2" value="Buscar">
        </div>
    </form>
</div>
<?php
include_once("../../ESTRUCTURA/footer.php");
?>