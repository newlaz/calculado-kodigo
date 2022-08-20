<?php
class verificaciones
{
    public static function unidadesSoportadas($valor, $IUnidadC, $IUnidadR, $objectArray)
    {
        $soportado = false;
        if (array_key_exists($IUnidadC, $objectArray) && array_key_exists($IUnidadR, $objectArray) && is_numeric($valor)) {
            $soportado = true;
            return $soportado;
        } else {
            return $soportado;
        }
    }

    public static function verificarIndices($indice, $objectArray)
    {


        if (array_key_exists($indice, $objectArray)) {
            return true;
        } else {
            return false;
        }
    }

    public static function verificarValorNumerico($valor)
    {
        if (is_numeric($valor)) {
            return true;
        } else {
            return false;
        }
    }
}
