<?php

class controlSubirArchivo
{


    public function validarSubida()
    {

        $dirUploads = "uploads/";

        $tamanioMax = 2 * 1024 * 1024;

        if (!is_dir($dirUploads)) {
            mkdir($dirUploads, 0777, true);
        }

        if (isset($_FILES["archivo"])) {

            $archivo = $_FILES["archivo"];

            $nombre = $archivo["name"];
            $tipo = pathinfo($nombre, PATHINFO_EXTENSION);
            $tamanio = $archivo["size"];
            $tmpName = $archivo["tmp_name"];

            if ($tipo != "doc" && $tipo != "pdf") {
                $resultado = "El archivo debe ser tipo .doc o .pdf";
            } else if ($tamanio > $tamanioMax) {
                $resultado = "El archivo no puede exceder 2 Mb";
            } else {
                $destino = $dirUploads . $nombre;
                if (!copy($tmpName, $destino)) {
                    $resultado = "El archivo no pudo sere cargado";
                } else {
                    $resultado = "<a href=" . $destino . ">Link al archivo</a>";
                }
            }
        } else {
            $resultado = "No se pudo acceder al archivo temporal";
        }
        return $resultado;
    }
}
