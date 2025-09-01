<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="formDatos" name="formDatos" method="get" action="../../ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp1e3">

    <label id="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"> <br>
    <label id="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"> <br>
    <label id="edad" name="edad">Edad:</label>
    <input type="number" id="edad" name="edad" min="0" max="120"> <br>
    <label id="direccion" name="direccion">Direccion:</label>
    <input type="text" id="direccion" name="direccion"> <br>

    <p>Nivel de estudio: </p>
    <div id="errorEstudios"></div>
    <input type="radio" id="noEstudios" name="estudios" value="noEstudios">
    <label id="noEstudios">No tiene estudios</label> <br>
    <input type="radio" id="primario" name="estudios" value="primario">
    <label id="primario">Estudios primarios</label> <br>
    <input type="radio" id="secundario" name="estudios" value="secundario">
    <label id="secundario">Estudios secundarios</label> <br>

    <p>Género: </p>
    <div id="errorGenero"></div>
    <input type="radio" id="masculino" name="genero" value="masculino">
    <label id="masculino">Masculino</label> <br>
    <input type="radio" id="femenino" name="genero" value="femenino">
    <label id="femenino">Femenino</label> <br>
    <input type="radio" id="otro" name="genero" value="otro">
    <label id="otro">Otro</label> <br>
    <input type="radio" id="noCompartir" name="genero" value="noComparte">
    <label id="noCompartir">Prefiero no compartir</label> <br>

    <p>Deportes: </p>
    <div id="errorDeportes"></div>
    <input type="checkbox" id="futbol" name="deportes[]" value="futbol">
    <label for="futbol">Futbol</label> <br>
    <input type="checkbox" id="basquet" name="deportes[]" value="basquet">
    <label for="basquet">Basquet</label> <br>
    <input type="checkbox" id="tenis" name="deportes[]" value="tenis">
    <label for="tenis">Tenis</label> <br>
    <input type="checkbox" id="natacion" name="deportes[]" value="natacion">
    <label for="natacion">Natacion</label> <br>

    <input type="submit" name="submit" value="Continuar">
</form>
<script src="/WebDinamica/VISTA/JS/JSTP1/EJ3/formValidacionInfoPersonal.js"></script>
<?php include_once("../../ESTRUCTURA/footer.php") ?>