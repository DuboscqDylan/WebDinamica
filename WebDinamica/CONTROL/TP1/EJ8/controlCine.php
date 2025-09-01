<?php

class controlCine
{

    public function calcularPrecioEntrada($datos)
    {
        $edad = $datos['edad'];
        $estudios = $datos['estudios'];

        if (
            $edad == 'menorDoce' &&
            $estudios == 'estudiante'
        ) {
            $precio = 160;
        } else {
            if ($edad == 'mayorDoce' && $estudios == 'estudiante') {
                $precio = 180;
            } else {
                $precio = 300;
            }
        }

        return $precio;
        echo "El precio para su entrada es de: " . $precio;
        echo "<br> <a href=" . "../../../VISTA/TP1/EJ8/vistaCine.php" . ">Calcular el precio de otra entrada</a>";
    }
}
