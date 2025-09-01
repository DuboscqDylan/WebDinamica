<?php include_once("../../ESTRUCTURA/header.php") ?>

<form id="formSubirArchivo" name="formSubirArchivo" method="post" action="../../ACCION/formAccion.php" enctype="multipart/form-data">
    <input type="hidden" id="accion" name="accion" value="tp3e1">
    <label for="archivo">Subir archivo</label>
    <input type="file" name="archivo" id="archivo">
    <input type="submit" id="submit" name="submit" value="Enviar">
</form>


<?php include_once("../../ESTRUCTURA/footer.php") ?>