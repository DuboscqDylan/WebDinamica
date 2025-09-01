<?php include_once("../../ESTRUCTURA/header.php") ?>

<div class="container m-4">
    <div class="card shadow">
        <div class="card-header">
            <h3 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Cinem@as</h3>
        </div>
        <div class="card-body">
            <form id="formCinema" name="formCinema" method="post" action="../../ACCION/formAccion.php" enctype="multipart/form-data">

                <input type="hidden" id="accion" name="accion" value="tp2e4">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" id="titulo" name="titulo" class="form-control">
                        <div id="errorTitulo" class="text-danger small"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text" id="actores" name="actores" class="form-control">
                        <div id="errorActores" class="text-danger small"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" id="director" name="director" class="form-control">
                        <div id="errorDirector" class="text-danger small"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="guion" class="form-label">Guion</label>
                        <input type="text" id="guion" name="guion" class="form-control">
                        <div id="errorGuion" class="text-danger small"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="produccion" class="form-label">Produccion</label>
                        <input type="text" id="produccion" name="produccion" class="form-control">
                        <div id="errorProduccion" class="text-danger small"></div>
                    </div>
                    <div class="col-md-2">
                        <label for="anio" class="form-label">Año</label>
                        <input type="text" id="anio" name="anio" class="form-control">
                        <div id="errorAnio" class="text-danger small"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" id="nacionalidad" name="nacionalidad" class="form-control">
                        <div id="errorNacionalidad" class="text-danger small"></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="genero" class="form-label">Género</label>
                        <select id="genero" name="genero" class="form-select">
                            <option id="comedia" name="comedia" value="comedia">Comedia</option>
                            <option id="drama" name="drama" value="drama">Drama</option>
                            <option id="terror" name="terror" value="terror">Terror</option>
                            <option id="romantica" name="romantica" value="romantica">Romanticas</option>
                            <option id="suspenso" name="suspenso" value="suspenso">Suspenso</option>
                            <option id="otras" name="otras" value="otras">Otras</option>
                        </select>
                        <div id="errorGenero" class="text-danger small"></div>
                    </div>
                    <div class="col-md-4">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="number" id="duracion" name="duracion" class="form-control">
                        <div id="errorDuracion" class="text-danger small"></div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Restricciones de edad</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <label for="todoPublico" class="form-check-label">Todos los publicos</label>
                                <input type="radio" name="restriccion" id="todoPublico" class="form-check-input" value="Todos los publicos">
                            </div>
                            <div class="form-check form-check-inline">
                                <label for="mayorSiete" class="form-check-label">Mayores de 7 años</label>
                                <input type="radio" name="restriccion" id="mayorSiete" class="form-check-input" value="Mayores de 7 años">
                            </div>
                            <div class="form-check form-check-inline">
                                <label for="mayorDieciocho" class="form-check-label">Mayores de 18</label>
                                <input type="radio" name="restriccion" id="mayorDieciocho" class="form-check-input" value="Mayores de 18 años">
                            </div>
                        </div>
                        <div id="errorRestriccion" class="text-danger small"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis</label>
                    <input type="textarea" id="sinopsis" class="form-control" rows="3" name="sinopsis">
                    <div id="errorSinopsis" class="text-danger small"></div>
                </div>

                <div class="mb-3">
                    <label for="archivo" class="form-label">Subir imagen</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" accept="image/*">
                </div>

                <div class="d-flex justify-content-end">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary me-2" value="Enviar">
                    <input type="reset" name="reset" id="reset" class="btn btn-secondary" value="Borrar">
                </div>

            </form>
        </div>
    </div>
</div>
<script src="/WebDinamica/VISTA/JS/JSTP2/EJ4/formValidacionCinema.js"></script>

<?php include_once("../../ESTRUCTURA/footer.php") ?>