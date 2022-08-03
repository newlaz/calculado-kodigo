<?php
// Length
class Longitudes
{
    protected const LONGITUD_A_METROS = [
        "IN" => 0.0254,
        "Y" => 0.9144,
        "CM" => 0.01,
        "M" => 1,
        "KM" => 1000,
    ];

    protected static $LONGITUDES = [
        1 => 'CM',
        2 => 'KM',
        3 => 'M',
        4 => 'Y',
        5 => 'IN',
    ];
}

class conversionLongitudes extends Longitudes
{
    public static function convertir_a_metros($valor, $unidad_desde)
    {
        if (array_key_exists($unidad_desde, self::LONGITUD_A_METROS)) {
            return $valor * self::LONGITUD_A_METROS[$unidad_desde];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_desde_metros($valor, $unidad_esperada)
    {
        if (array_key_exists($unidad_esperada, self::LONGITUD_A_METROS)) {
            return $valor / self::LONGITUD_A_METROS[$unidad_esperada];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_longitud($valor, $unidad_desde, $unidad_esperada)
    {
        $valor_metros = self::convertir_a_metros($valor, $unidad_desde);
        $resultado = self::convertir_desde_metros($valor_metros, $unidad_esperada);
        return $resultado;
    }
}

class verificaciones extends Longitudes
{
    public static function unidadesSoportadas($valor, $IUnidadC, $IUnidadR)
    {
        $soportado = false;
        if (array_key_exists($IUnidadC, self::$LONGITUDES) && array_key_exists($IUnidadR, self::$LONGITUDES) && is_numeric($valor)) {
            $soportado = true;
            return $soportado;
        } else {
            return $soportado;
        }
    }

    public static function verificarIndices($indice)
    {
        if (array_key_exists($indice, self::$LONGITUDES)) {
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

class enviarValores extends conversionLongitudes
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_longitud($valor, self::$LONGITUDES[$IUnidadC], self::$LONGITUDES[$IUnidadR]) . ' ' . self::$LONGITUDES[$IUnidadR];
    }
}
