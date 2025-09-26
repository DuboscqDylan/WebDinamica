<?php
include_once(dirname(__DIR__)."../../ESTRUCTURA/header.php");
?>
<div class="card-body">
    <form id="formNuevaPersona" name="formNuevaPersona" method="POST" action="/phpMysql/VISTA/ACCION/formAccion.php">
        <input type="hidden" name="accion" id="accion" value="tp4ej6">
        <label for="NroDni" class="form-label">Numero DNI:</label>
        <input type="text" id="NroDni" name="NroDni" class="form-control">
        <label for="Apellido" class="form-label">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" class="form-control">
        <label for="Nombre" class="form-label">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" class="form-control">
        <label for="fechaNac" class="form-label">Fecha de nacimiento:</label>
        <input type="date" id="fechaNac" name="fechaNac" class="form-control">
        <label for="Telefono" class="form-label">Telefono:</label>
        <input type="text" id="Telefono" name="Telefono" class="form-control">
        <label for="Domicilio" class="form-label">Domicilio:</label>
        <input type="text" id="Domicilio" name="Domicilio" class="form-control">
        <div class="d-flex justify-content-center">
            <input type="submit" name="submit" id="submit" class="btn btn-primary me-2" value="Buscar">
        </div>
    </form>
</div>
<?php
include_once(dirname(__DIR__)."../../ESTRUCTURA/footer.php");
?>