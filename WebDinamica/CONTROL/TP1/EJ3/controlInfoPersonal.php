<?php

class controlInfoPersonal
{

    public function mostrarInfoPersonal($info)
    {

        $edad = $info['edad'];
        $nombre = $info['nombre'];
        $apellido = $info['apellido'];
        $direccion = $info['direccion'];
        $genero = $info['genero'];
        $estudios = $info['estudios'];
        $deportes = $info['deportes'];

        if ($edad >= 18) {
            $cadena =  "Hola, soy " . $nombre . " " . $apellido . " tengo " . $edad . " años y vivo en " . $direccion . ". ";

            switch ($estudios) {
                case 'noEstudios':
                    $cadena =  $cadena . "No tengo estudios completados. ";
                    break;
                case 'primario':
                    $cadena = $cadena . "Tengo estudios primarios completos. ";
                    break;
                case 'secundario':
                    $cadena = $cadena . "Tengo estudios secundarios completos. ";
                    break;
            }

            switch ($genero) {
                case 'masculino':
                    $cadena = $cadena . "Soy de genero masculino. ";
                    break;
                case 'femenino':
                    $cadena = $cadena . "Soy de genero femenino. ";
                    break;
                case 'otro':
                    $cadena = $cadena . "Mi genero no es femenino ni masculino. ";
                    break;
                case 'noCompartir':
                    $cadena = $cadena . "Prefiero no compartir mi genero. ";
                    break;
            }

            $cadena = $cadena . "Juego " . count($deportes) . " deportes.";
        } else {
            $cadena = "Esta persona es menor de edad, ingresar otros datos";
        }

        return $cadena;
    }
}
