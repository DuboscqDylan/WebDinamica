<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="formNum" name="formNum" method="get" action="../../../VISTA/ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp1e1">
    <label for="numero">Numero:</label>
    <input name="numero" type="text" id="numero" /> <br> <br>
    <input type="submit" name="submit" value="Continuar" />
</form>
<script src="/WebDinamica/VISTA/JS/JSTP1/EJ1/formValidacionNumeros.js"></script>
<?php include_once("../../ESTRUCTURA/footer.php") ?>