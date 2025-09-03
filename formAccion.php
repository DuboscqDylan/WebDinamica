<?php
include_once(__DIR__ . "../../ESTRUCTURA/header.php");


if ($_POST || $_GET) {

    $accion = $_POST['accion'] ?? $_GET['accion'];

    switch ($accion) {

        case 'tp1e1':
            require_once(__DIR__ . "../../../CONTROL/TP1/EJ1/controlNumero.php");
            $control = new controlNumero();
            $numero = $_GET['numero'];
            $resultado = $control->verificarNumero($numero);
            echo "<p>Resultado: " . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ1/vistaNumero.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp1e2':
            require_once(__DIR__ . "../../../CONTROL/TP1/EJ2/controlCursada.php");
            $control = new controlCursada();
            $cronograma = $_GET;
            $resultado = $control->calcularCargaHoraria($cronograma);
            echo "<p>La carga horaria es de: " . $resultado . "hs</p>";
            echo "<br> <a href=" . "../TP1/EJ2/vistaCursada.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp1e3':
            require_once(__DIR__ . "../../../CONTROL/TP1/EJ3/controlInfoPersonal.php");
            $control = new controlInfoPersonal();
            $resultado = $control->mostrarInfoPersonal($_GET);
            echo "<p>" . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ3/vistaInfoPersonal.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp1e7':
            require_once(__DIR__ . "../../../CONTROL/TP1/EJ7/controlOperaciones.php");
            $control = new controlOperaciones();
            $resultado = $control->operar($_GET);
            echo "<p>" . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ7/vistaOperaciones.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp1e8':
            require_once(__DIR__ . "../../../CONTROL/TP1/EJ8/controlCine.php");
            $control = new controlCine();
            $resultado = $control->calcularPrecioEntrada($_GET);
            echo "<p>El precio de la entrada es: " . $resultado . "</p>";
            echo "<br> <a href=" . "../TP1/EJ8/vistaCine.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp2e3':
            require_once(__DIR__ . "../../../CONTROL/TP2/EJ3/controlLogin.php");
            $control = new controlLogin();
            $resultado = $control->validarUsuario(["username" => $_POST["username"], "password" => $_POST["password"]]);
            echo "<p>" . $resultado . "</p>";
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP2/EJ3/vistaLogin.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp2e4':
            require_once(__DIR__ . "../../../CONTROL/TP2/EJ4/controlCinema.php");
            $control = new controlCinema();
            $resultado = $control->validarImagen();
            $pelicula = $_POST;
            $pelicula['archivo'] = $resultado;
            include_once("../../VISTA/ESTRUCTURA/header.php");
            include_once("../../VISTA/TP2/EJ4/vistaMostrarPelicula.php");
            include_once("../../VISTA/ESTRUCTURA/footer.php");
            break;

        case 'tp3e1':
            require_once(__DIR__ . "../../../CONTROL/TP3/EJ1/controlSubirArchivo.php");
            $control = new controlSubirArchivo;
            $resultado = $control->validarSubida();
            echo $resultado;
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP3/EJ1/vistaSubirArchivo.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;

        case 'tp3e2':
            require_once(__DIR__ . "../../../CONTROL/TP3/EJ2/controlMostrarArchivo.php");
            $control = new controlMostrarArchivo();
            $resultado = $control->validarSubida();
            echo $resultado;
            echo "<br> <a href=" . "/WebDinamica/VISTA/TP3/EJ2/vistaMostrarArchivo.php class='btn btn-primary mt-3'>Volver a la pagina anterior</a>";
            break;
    }
}

include_once(__DIR__ . "../../ESTRUCTURA/footer.php");
