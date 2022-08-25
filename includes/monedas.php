<?php
class Monedas
{
    protected const MONEDA_A_DOLAR = [
        "EUR" => 0.99,
        "GBP" => 1.18,
        "RUB" => 0.017,
        "CNY" => 0.15,
        "USD" => 1
    ];

    protected const MONEDAS = [
        1 => ['USD', 'Dolares'],
        2 => ['EUR', 'Euros'],
        3 => ['GBP', 'Libra Esterlina'],
        4 => ['RUB', 'Rublos'],
        5 => ['CNY', 'Yuanes']
    ];
}

class conversionMonedas extends Monedas
{
    public static function convertir_a_dolar($valor, $unidad_desde)
    {
        if (array_key_exists($unidad_desde, self::MONEDA_A_DOLAR)) {
            return $valor * self::MONEDA_A_DOLAR[$unidad_desde];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_desde_dolar($valor, $unidad_esperada)
    {
        if (array_key_exists($unidad_esperada, self::MONEDA_A_DOLAR)) {
            return $valor / self::MONEDA_A_DOLAR[$unidad_esperada];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_moneda($valor, $unidad_desde, $unidad_esperada)
    {
        $valor_dolar = self::convertir_a_dolar($valor, $unidad_desde);
        $resultado = self::convertir_desde_dolar($valor_dolar, $unidad_esperada);
        return $resultado;
    }
}

class enviarValoresMonedas extends conversionMonedas
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_moneda($valor, self::MONEDAS[$IUnidadC][0], self::MONEDAS[$IUnidadR][0]) . ' ' . self::MONEDAS[$IUnidadR][0];
    }
}
