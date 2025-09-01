<?php

class controlOperaciones
{

    public function operar($operacion)
    {

        $operando1 = $operacion['operando1'];
        $operando2 = $operacion['operando2'];
        $operador = $operacion['operador'];

        switch ($operador) {
            case 'suma':
                $resultado = $operando1 + $operando2;
                $simbolo = "+";
                break;
            case 'resta':
                $resultado = $operando1 - $operando2;
                $simbolo = "-";
                break;
            case 'multiplicacion':
                $resultado = $operando1 * $operando2;
                $simbolo = "*";
                break;
            case 'division':
                $resultado = $operando1 / $operando2;
                $simbolo = "/";
                break;
        }

        return $operando1 . $simbolo . $operando2 . "=" . $resultado;
    }
}
