<?php

require_once(__DIR__ . "../../../CONTROL/TP1/EJ1/controlNumero.php");
require_once(__DIR__ . "../../../CONTROL/TP1/EJ2/controlCursada.php");
require_once(__DIR__ . "../../../CONTROL/TP1/EJ3/controlInfoPersonal.php");
require_once(__DIR__ . "../../../CONTROL/TP1/EJ7/controlOperaciones.php");
require_once(__DIR__ . "../../../CONTROL/TP1/EJ8/controlCine.php");
require_once(__DIR__ . "../../../CONTROL/TP2/EJ3/controlLogin.php");
require_once(__DIR__ . "../../../CONTROL/TP2/EJ4/controlCinema.php");
require_once(__DIR__ . "../../../CONTROL/TP3/EJ1/controlSubirArchivo.php");
require_once(__DIR__ . "../../../CONTROL/TP3/EJ2/controlMostrarArchivo.php");

if ($_POST || $_GET) {

    $accion = $_POST['accion'] ?? $_GET['accion'];

    switch ($accion) {

        case 'tp1e1':
            $control = new controlNumero();
            $numero = $_GET['numero'];
            $resultado = $control->verificarNumero($numero);
            echo "<p>Resultado: " . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ1/vistaNumero.php>Volver a la pagina anterior</a>";
            break;

        case 'tp1e2':
            $control = new controlCursada();
            $cronograma = $_GET;
            $resultado = $control->calcularCargaHoraria($cronograma);
            echo "<p>Cantidad de horas que se cursan por semana:" . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ2/vistaCursada.php>Volver a la pagina anterior</a>";
            break;

        case 'tp1e3':
            $control = new controlInfoPersonal();
            $resultado = $control->mostrarInfoPersonal($_GET);
            echo "<p>" . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ3/vistaInfoPersonal.php>Volver a la pagina anterior</a>";
            break;

        case 'tp1e7':
            $control = new controlOperaciones();
            $resultado = $control->operar($_GET);
            echo "<p>" . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ7/vistaOperaciones.php>Volver a la pagina anterior</a>";
            break;

        case 'tp1e8':
            $control = new controlCine();
            $resultado = $control->calcularPrecioEntrada($_GET);
            echo "<p>El precio de la entrada es: " . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ8/vistaCine.php>Volver a la pagina anterior</a>";
            break;

        case 'tp2e3':
            $control = new controlLogin();
            $resultado = $control->validarUsuario(["username" => $_POST["username"], "password" => $_POST["password"]]);
            echo "<p>" . $resultado . "</p>";
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP2/EJ3/vistaLogin.php>Volver a la pagina anterior</a>";
            break;

        case 'tp2e4':
            $control = new controlCinema();
            $resultado = $control->validarImagen();
            echo "<h2>La pelicula introducida es:</h2><br>";
            echo "<p><strong>Titulo: </strong>" . $_POST["titulo"] . "</p>";
            echo "<p><strong>Actores: </strong>" . $_POST["actores"] . "</p>";
            echo "<p><strong>Director: </strong>" . $_POST["director"] . "</p>";
            echo "<p><strong>Guion: </strong>" . $_POST["guion"] . "</p>";
            echo "<p><strong>Produccion: </strong>" . $_POST["produccion"] . "</p>";
            echo "<p><strong>Año: </strong>" . $_POST["anio"] . "</p>";
            echo "<p><strong>Nacionalidad: </strong>" . $_POST["nacionalidad"] . "</p>";
            echo "<p><strong>Genero: </strong>" . $_POST["genero"] . "</p>";
            echo "<p><strong>Duracion: </strong>" . $_POST["duracion"] . "</p>";
            echo "<p><strong>Restricciones de edad: </strong>" . $_POST["restriccion"] . "</p>";
            echo $resultado;
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP2/EJ4/vistaCinema.php>Volver a la pagina anterior</a>";
            break;

        case 'tp3e1':
            $control = new controlSubirArchivo;
            $resultado = $control->validarSubida();
            echo $resultado;
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP3/EJ1/vistaSubirArchivo.php>Volver a la pagina anterior</a>";
            break;

        case 'tp3e2':
            $control = new controlMostrarArchivo();
            $resultado = $control->validarSubida();
            echo $resultado;
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP3/EJ2/vistaMostrarArchivo.php>Volver a la pagina anterior</a>";
            break;
    }
}
