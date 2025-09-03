<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="calculoPrecio" name="calculoPrecio" method="get" action="../../ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp1e8">
    <p>Edad: </p>
    <div id="errorEdad"></div>
    <input type="radio" id="menorDoce" name="edad" value="menorDoce" class="form-check-input">
    <label for="menorDoce" class="form-check-label">Menor de 12</label> <br>
    <input type="radio" id="mayorDoce" name="edad" value="mayorDoce" class="form-check-input">
    <label for="mayorDoce" name="edad" class="form-check-label">Mayor de 12</label> <br>
    <p>Es estudiante: </p>
    <div id="errorEstudios"></div>
    <input type="radio" id="estudiante" name="estudios" value="estudiante" class="form-check-input">
    <label for="estudiante" class="form-check-label">Estudiante</label> <br>
    <input type="radio" id="noEstudiante" name="estudios" value="noEstudiante" class="form-check-input">
    <label for="noEstudiante" class="form-check-label">No estudiante</label> <br>

    <input type="submit" name="submit" value="Calcular Precio" class="btn btn-success">
</form>
<script src="/WebDinamica/VISTA/JS/JSTP1/EJ8/formValidacionCine.js"></script>
<?php include_once("../../ESTRUCTURA/footer.php") ?>