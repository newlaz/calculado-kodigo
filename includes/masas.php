<?php

class Masas {
    protected const MASA_A_KILOGRAMO = [
        "OZ" =>    0.0283495,
        "LB" =>    0.453592,
        "MG" =>    0.000001,
        "G" =>    0.001,
        "KG" =>    1
    ];

    protected const MASAS = [
        1 => ['OZ', 'Onzas'],
        2 => ['LB', 'Libras'],
        3 => ['MG', 'Miligramos'],
        4 => ['G', 'Gramos'],
        5 => ['KG', 'Kilogramos']
    ];
}

class conversionMasas extends Masas{
    
    public static function convertir_a_kilogramos($valor, $unidad_desde)
    {
        if (array_key_exists($unidad_desde, self::MASA_A_KILOGRAMO)) {
            return $valor * self::MASA_A_KILOGRAMO[$unidad_desde];
        } else {
            return "Unidad no soportada.";
        }
    }
    
    public static function convertir_desde_kilogramos($valor, $unidad_esperada)
    {
        if (array_key_exists($unidad_esperada, self::MASA_A_KILOGRAMO)) {
            return $valor / self::MASA_A_KILOGRAMO[$unidad_esperada];
        } else {
            return "Unidad no soportada.";
        }
    }
    
    public static function convertir_masas($value, $unidad_desde, $unidad_esperada)
    {
        $kg_valor = self::convertir_a_kilogramos($value, $unidad_desde);
        $nuevo_valor = self::convertir_desde_kilogramos($kg_valor, $unidad_esperada);
        return $nuevo_valor;
    }
}

class enviarValoresMasas extends conversionMasas
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_masas($valor, self::MASAS[$IUnidadC][0], self::MASAS[$IUnidadR][0]) . ' ' . self::MASAS[$IUnidadR][0];
    }
}
