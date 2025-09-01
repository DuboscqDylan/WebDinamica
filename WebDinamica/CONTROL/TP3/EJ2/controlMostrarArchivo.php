<?php

class controlMostrarArchivo
{


    public function validarSubida()
    {

        $dirUploads = "uploads/";

        if (!is_dir($dirUploads)) {
            mkdir($dirUploads, 0777, true);
        }

        if (isset($_FILES["archivo"])) {

            $archivo = $_FILES["archivo"];

            $nombre = $archivo["name"];
            $tipo = pathinfo($nombre, PATHINFO_EXTENSION);
            $tamanio = $archivo["size"];
            $tmpName = $archivo["tmp_name"];

            if ($tipo != "txt") {
                $resultado = "El archivo debe ser tipo .txt";
            } else {
                $destino = $dirUploads . $nombre;
                if (!copy($tmpName, $destino)) {
                    $resultado = "El archivo no pudo sere cargado";
                } else {
                    $contenido = file_get_contents($tmpName);
                    $resultado = "<h2>Contenido del archivo:</h2> <textarea rows='20' cols='80'>" . htmlspecialchars($contenido) . "</textarea>";
                }
            }
        } else {
            $resultado = "No se pudo acceder al archivo temporal";
        }
        return $resultado;
    }
}
