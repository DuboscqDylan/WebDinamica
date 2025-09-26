<?php
include_once(__DIR__ . "../../ESTRUCTURA/header.php");

if ($_POST || $_GET) {
    $accion = $_POST['accion'] ?? $_GET['accion'];

    switch ($accion) {
        case 'tp4ej4':
            require_once(__DIR__ . "../../../CONTROL/ControlAuto.php");
            $control = new ControlAuto();
            $patente = $_POST['patente'];
            $resultado = $control->buscar($patente);
            if ($resultado['exito']) {
                $auto = $resultado['auto'];
                echo "<div class='alert alert-success'>";
                echo "<h4>Auto encontrado:</h4>";
                echo "Patente: " . $auto->getPatente() . "<br>";
                echo "Marca: " . $auto->getMarca() . "<br>";
                echo "Modelo: " . $auto->getModelo() . "<br>";
                echo "DNI Dueño: " . $auto->getDniDuenio() . "<br>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger'> " . $resultado['error'] . "</div>";
            }
            break;
        case 'tp4ej5':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            $control = new ControlPersona();
            $personas = $control->listar();
            include(dirname(__DIR__) . '../TP4/EJ5/listaPersonas.php');
            break;
        case 'tp4ej5b':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            require_once(__DIR__ . "../../../CONTROL/ControlAuto.php");
            $controlP = new ControlPersona();
            $controlA = new ControlAuto();
            $persona = $controlP->buscar($_GET['NroDni']);
            $persona = $persona['persona'];
            $autos = $controlA->listar('DniDuenio = ' . $_GET['NroDni']);
            include(dirname(__DIR__) . '../TP4/EJ5/autosPersona.php');
            break;
        case 'tp4ej6':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            $control = new ControlPersona();
            $resultado = $control->insertar($_POST);
            if ($resultado['exito']) {
                echo "<div class='alert alert-success'>";
                echo "<p>Persona agregada!</p>";
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger'> " . $resultado['error'] . "</div>";
            }
            break;
        case 'tp4ej7':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            require_once(__DIR__ . "../../../CONTROL/ControlAuto.php");
            $controlP = new ControlPersona();
            $controlA = new ControlAuto();
            if ($controlP->buscar($_POST['DniDuenio'])['exito']) {
                $resultado = $controlA->insertar($_POST);
                if ($resultado) {
                    echo "<div class='alert alert-success'>";
                    echo "<p>El auto fue ingresado con exito!</p>";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-danger'> Hubo un error al ingresar el auto, intente de nuevo.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'> El duenio de este auto no está previamente cargado, ingrese sus datos por favor. </div>";
                include_once(dirname(__DIR__) . "../TP4/EJ6/nuevaPersona.php");
            }
            break;
        case 'tp4ej8':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            require_once(__DIR__ . "../../../CONTROL/ControlAuto.php");
            $controlP = new ControlPersona();
            $controlA = new ControlAuto();
            $resultadoAuto = $controlA->buscar($_POST['patente']);
            if ($resultadoAuto['exito']) {
                $datos = $resultadoAuto['auto'];
                $resultadoPersona = $controlP->buscar($_POST['DniDuenio']);
                if ($resultadoPersona['exito']) {
                    $controlA->cambiarDuenio($_POST['patente'], $_POST['DniDuenio']);
                    echo "<div class='alert alert-success'>";
                    echo "<p>El dueño fue actualizado con exito!</p>";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-danger'> El DNI del nuevo dueño no pertenece a nadie en el sistema, ingrese sus datos por favor. </div>";
                }
            } else {
                echo "<div class='alert alert-danger'> No hay un auto con esta patente. </div>";
            }
            break;
        case 'tp4ej9':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            $controlP = new ControlPersona();
            $resultadoP = $controlP->buscar($_POST['NroDni']);
            if ($resultadoP['exito']) {
                $persona = $resultadoP['persona'];
                echo "<div class='alert alert-success'>";
                echo "<h4>Persona encontrada:</h4>";
                echo "NroDni: " . $persona->getNroDni() . "<br>";
                echo "Apellido: " . $persona->getApellido() . "<br>";
                echo "Nombre: " . $persona->getNombre() . "<br>";
                echo "Telefono: " . $persona->getTelefono() . "<br>";
                echo "Domicilio: " . $persona->getDomicilio() . "<br>";
                echo "</div>";
                include_once(__DIR__ . "../../TP4/EJ9/modificarPersona.php");
            } else {
                echo "<div class='alert alert-danger'> El DNI no pertenece a nadie en el sistema. </div>";
            }
            break;
        case 'tp4ej9Mod':
            require_once(__DIR__ . "../../../CONTROL/ControlPersona.php");
            $controlP = new ControlPersona();

            $datos = [
                'NroDni'    => $_POST['NroDni'],
                'Apellido'  => $_POST['Apellido'],
                'Nombre'    => $_POST['Nombre'],
                'FechaNac'  => $_POST['fechaNac'],
                'Telefono'  => $_POST['Telefono'],
                'Domicilio' => $_POST['Domicilio']
            ];

            $resultado = $controlP->modificar($datos);

            if ($resultado['exito']) {
                echo "<div class='alert alert-success'>La persona fue modificada correctamente.</div>";
            } else {
                echo "<div class='alert alert-danger'>No se pudo modificar: {$resultado['error']}</div>";
            }
            break;
            break;
    }
}
include_once(__DIR__ . "../../ESTRUCTURA/footer.php");
