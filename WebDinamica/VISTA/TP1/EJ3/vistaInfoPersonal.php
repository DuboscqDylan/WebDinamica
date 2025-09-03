<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="formDatos" name="formDatos" method="get" action="../../ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp1e3">

    <div class="row mb-6">
        <div class="col mb-8">
            <label id="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control"> <br>
            <label id="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-control"> <br>
            <label id="edad" name="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="0" max="120" class="form-control"> <br>
            <label id="direccion" name="direccion">Direccion:</label>
            <input type="text" id="direccion" name="direccion" class="form-control"> <br>
        </div>
        <div class="col mb-4">
            <p>Nivel de estudio: </p>
            <div id="errorEstudios"></div>
            <input type="radio" id="noEstudios" name="estudios" value="noEstudios" class="form-check-input">
            <label id="noEstudios" class="form-check-label">No tiene estudios</label> <br>
            <input type="radio" id="primario" name="estudios" value="primario" class="form-check-input">
            <label id="primario" class="form-check-label">Estudios primarios</label> <br>
            <input type="radio" id="secundario" name="estudios" value="secundario" class="form-check-input">
            <label id="secundario" class="form-check-label">Estudios secundarios</label> <br>

            <p>Género: </p>
            <div id="errorGenero"></div>
            <input type="radio" id="masculino" name="genero" value="masculino" class="form-check-input">
            <label id="masculino" class="form-check-label">Masculino</label> <br>
            <input type="radio" id="femenino" name="genero" value="femenino" class="form-check-input">
            <label id="femenino" class="form-check-label">Femenino</label> <br>
            <input type="radio" id="otro" name="genero" value="otro" class="form-check-input">
            <label id="otro" class="form-check-label">Otro</label> <br>
            <input type="radio" id="noCompartir" name="genero" value="noComparte" class="form-check-input">
            <label id="noCompartir" class="form-check-label">Prefiero no compartir</label> <br>

            <p>Deportes: </p>
            <div id="errorDeportes"></div>
            <input type="checkbox" id="futbol" name="deportes[]" value="futbol" class="form-check-input">
            <label for="futbol" class="form-check-label">Futbol</label> <br>
            <input type="checkbox" id="basquet" name="deportes[]" value="basquet" class="form-check-input">
            <label for="basquet" class="form-check-label">Basquet</label> <br>
            <input type="checkbox" id="tenis" name="deportes[]" value="tenis" class="form-check-input">
            <label for="tenis" class="form-check-label">Tenis</label> <br>
            <input type="checkbox" id="natacion" name="deportes[]" value="natacion" class="form-check-input">
            <label for="natacion" class="form-check-label">Natacion</label> <br>
        </div>
    </div>
    <input type="submit" name="submit" value="Continuar" class="btn btn-success">
</form>
<script src="/WebDinamica/VISTA/JS/JSTP1/EJ3/formValidacionInfoPersonal.js"></script>
<?php include_once("../../ESTRUCTURA/footer.php") ?>