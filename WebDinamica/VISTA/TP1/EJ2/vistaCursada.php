<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="formCursada" name="formCursada" method="get" action="../../../VISTA/ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp1e2">
    <label for="lunes"> Lunes: </label>
    <input type="number" id="lunes" name="lunes" min="0" max="24"> <br>
    <label for="martes"> Martes: </label>
    <input type="number" id="martes" name="martes" min="0" max="24"> <br>
    <label for="miercoles"> Miercoles: </label>
    <input type="number" id="miercoles" name="miercoles" min="0" max="24"> <br>
    <label for="jueves"> Jueves: </label>
    <input type="number" id="jueves" name="jueves" min="0" max="24"> <br>
    <label for="viernes"> Viernes: </label>
    <input type="number" id="viernes" name="viernes" min="0" max="24"> <br>
    <input type="submit" name="submit" value="Continuar">
</form>
<?php include_once("../../ESTRUCTURA/footer.php") ?>