<?php

class controlCinema
{

    public function validarImagen()
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

            if (getimagesize($tmpName) === false) {
                $resultado = "El archivo debe ser tipo una imagen";
            } else {
                $destino = $dirUploads . $nombre;
                if (!copy($tmpName, $destino)) {
                    $resultado = "La imagen no pudo sere cargado";
                } else {
                    $resultado = "<img src='" . $destino . "' width='500' height='500'/>";
                }
            }
        } else {
            $resultado = "No se pudo acceder al archivo temporal";
        }
        return $resultado;
    }
}
