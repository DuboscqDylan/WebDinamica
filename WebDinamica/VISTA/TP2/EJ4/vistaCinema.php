<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="formCinema" name="formCinema" method="post" action="../../ACCION/formAccion.php" enctype="multipart/form-data">
    <input type="hidden" id="accion" name="accion" value="tp2e4">

    <label for="titulo">Titulo</label>
    <input type="text" id="titulo" name="titulo">
    <div id="errorTitulo"></div>

    <label for="actores">Actores</label>
    <input type="text" id="actores" name="actores">
    <div id="errorActores"></div>

    <label for="director">Director</label>
    <input type="text" id="director" name="director">
    <div id="errorDirector"></div>

    <label for="guion">Guion</label>
    <input type="text" id="guion" name="guion">
    <div id="errorGuion"></div>

    <label for="produccion">Produccion</label>
    <input type="text" id="produccion" name="produccion">
    <div id="errorProduccion"></div>

    <label for="anio">Año</label>
    <input type="text" id="anio" name="anio">
    <div id="errorAnio"></div>

    <label for="nacionalidad">Nacionalidad</label>
    <input type="text" id="nacionalidad" name="nacionalidad">
    <div id="errorNacionalidad"></div>

    <p>Género</p>
    <select id="genero" name="genero">
        <option id="comedia" name="comedia" value="comedia">Comedia</option>
        <option id="drama" name="drama" value="drama">Drama</option>
        <option id="terror" name="terror" value="terror">Terror</option>
        <option id="romantica" name="romantica" value="romantica">Romanticas</option>
        <option id="suspenso" name="suspenso" value="suspenso">Suspenso</option>
        <option id="otras" name="otras" value="otras">Otras</option>
    </select>
    <div id="errorGenero"></div>

    <label for="duracion">Duración</label>
    <input type="number" id="duracion" name="duracion">
    <div id="errorDuracion"></div>

    <p>Restricciones de edad</p>
    <label for="todoPublico">Todos los publicos</label>
    <input type="radio" name="restriccion" id="todoPublico" value="Todos los publicos">
    <label for="mayorSiete">Mayores de 7 años</label>
    <input type="radio" name="restriccion" id="mayorSiete" value="Mayores de 7 años">
    <label for="mayorDieciocho">Mayores de 18</label>
    <input type="radio" name="restriccion" id="mayorDieciocho" value="Mayores de 18 años">
    <div id="errorRestriccion"></div>

    <input type="textarea" id="sinopsis" name="sinopsis">
    <div id="errorSinopsis"></div>

    <input type="submit" name="submit" id="submit" value="Enviar">
    <input type="reset" name="reset" id="reset" value="Borrar">

    <input type="file" name="archivo" id="archivo" accept="image/*">

    <script src="/WebDinamica/VISTA/JS/JSTP2/EJ4/formValidacionCinema.js"></script>

    <?php include_once("../../ESTRUCTURA/header.php") ?>