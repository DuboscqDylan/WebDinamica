<?php include_once("../../ESTRUCTURA/header.php") ?>

<form id="formSubirArchivo" name="formSubirArchivo" method="post" action="../../ACCION/formAccion.php" enctype="multipart/form-data">
    <input type="hidden" id="accion" name="accion" value="tp3e1">
    <label for="archivo" class="form-label">Subir archivo</label>
    <input type="file" name="archivo" id="archivo" class="form-control"> <br>
    <input type="submit" id="submit" name="submit" value="Enviar" class="btn btn-success">
</form>


<?php include_once("../../ESTRUCTURA/footer.php") ?>