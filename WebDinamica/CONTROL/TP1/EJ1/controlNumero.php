<?php

class controlNumero
{

    public function verificarNumero($numero)
    {
        if ($numero == 0) {
            $resultado = "El número es 0";
        } elseif ($numero > 0) {
            $resultado = "El número es positivo";
        } else {
            $resultado = "El número es negativo";
        }
        return $resultado;
    }
}
