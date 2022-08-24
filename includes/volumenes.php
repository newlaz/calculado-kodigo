<?php
class Volumen{
public const VOLUMEN_A_LITROS = [
    "MM3" => 0.000001,
    "CM3" => 0.001,
    "M3" => 1000,
    "L" => 1,
    "FT3" => 28.3168,
    ];

    public const VOLUMEN = [
        1 => ['MM3','Milimetros cubicos' ],
        2 => ['CM3','Centimetros Cubicos' ],
        3 => ['M3', 'Metros Cubicos'],
        4 => ['L', 'Litros'],
        5 => ['FT3', 'Pies Cubicos']
    ];

}

class conversionesVolumen extends Volumen{

public static function convertir_a_litros($valor, $unidad_desde)
{
    if (array_key_exists($unidad_desde, self::VOLUMEN_A_LITROS)) {
        return $valor * self::VOLUMEN_A_LITROS[$unidad_desde];
    } else {
        return "Unidad no soportada.";
    }
}

public static function convertir_desde_litros($valor, $unidad_recibir)
{
    if (array_key_exists($unidad_recibir, self::VOLUMEN_A_LITROS)) {
        return $valor / self::VOLUMEN_A_LITROS[$unidad_recibir];
    } else {
        return "Unidad no soportada.";
    }
}

public static function convertir_volumen($valor, $unidad_desde, $unidad_recibir)
{
    $valor_litro = self::convertir_a_litros($valor, $unidad_desde);
    $nuevo_valor = self::convertir_desde_litros($valor_litro, $unidad_recibir);
    return $nuevo_valor;
}
}
class enviarValoresVolumen extends conversionesVolumen
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_volumen($valor, self::VOLUMEN[$IUnidadC][0], self::VOLUMEN[$IUnidadR][0]) . ' ' . self::VOLUMEN[$IUnidadR][0];
    }
}
