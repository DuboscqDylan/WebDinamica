<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="operaciones" name="operaciones" method="get" action="../../ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp1e7">
    <input type="number" id="operando1" name="operando1">
    <select id="operador" name="operador">
        <option id="suma" name="suma" value="suma">SUMA</option>
        <option id="resta" name="resta" value="resta">RESTA</option>
        <option id="multiplicacion" name="multiplicacion" value="multiplicacion">MULTIPLICACION</option>
        <option id="division" name="division" value="division">DIVISION</option>
    </select>
    <input type="number" id="operando2" name="operando2">
    <input type="submit" name="submit" value="Operar">
</form>
<?php include_once("../../ESTRUCTURA/footer.php") ?>