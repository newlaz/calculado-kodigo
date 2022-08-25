<?php
require_once('save.php');
// Length
class Longitudes
{
    protected const LONGITUD_A_METROS = [
        "IN" => 0.0254,
        "Y" => 0.9144,
        "CM" => 0.01,
        "M" => 1,
        "KM" => 1000
    ];

    protected const LONGITUDES = [
        1 => ['CM', 'Centimetros'],
        2 => ['KM', 'Kilometros'],
        3 => ['M', 'Metros'],
        4 => ['Y', 'Yardas'],
        5 => ['IN', 'Pulgadas']
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

class enviarValoresLongitudes extends conversionLongitudes
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_longitud($valor, self::LONGITUDES[$IUnidadC][0], self::LONGITUDES[$IUnidadR][0]) . ' ' . self::LONGITUDES[$IUnidadR][0];
    }
}
