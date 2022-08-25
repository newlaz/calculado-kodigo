<?php

class Datos
{
    protected const DATO_A_BYTES = [
        "B" => 1,
        "KB" => 1024,
        "MB" => 1048576,
        "GB" => 1073741824,
        "TB" => 1099511627778,
    ];

    protected const DATOS = [
        1 => ['B', 'Bytes'],
        2 => ['KB', 'Kilobytes'],
        3 => ['MB', 'Megabytes'],
        4 => ['GB', 'Gigabytes'],
        5 => ['TB', 'Terabytes']
    ];
}

class conversionesDatos extends Datos
{

    public static function convertir_a_litros($valor, $unidad_desde)
    {
        if (array_key_exists($unidad_desde, self::DATO_A_BYTES)) {
            return $valor * self::DATO_A_BYTES[$unidad_desde];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_desde_litros($valor, $unidad_recibir)
    {
        if (array_key_exists($unidad_recibir, self::DATO_A_BYTES)) {
            return $valor / self::DATO_A_BYTES[$unidad_recibir];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_Datos($valor, $unidad_desde, $unidad_recibir)
    {
        $valor_dato = self::convertir_a_litros($valor, $unidad_desde);
        $nuevo_valor = self::convertir_desde_litros($valor_dato, $unidad_recibir);
        return $nuevo_valor;
    }
}
class enviarValoresDatos extends conversionesDatos
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_Datos($valor, self::DATOS[$IUnidadC][0], self::DATOS[$IUnidadR][0]) . ' ' . self::DATOS[$IUnidadR][0];
    }
}
