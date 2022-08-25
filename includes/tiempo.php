
<?php
class Tiempo
{
    protected const TIEMPO_SEGUNDOS = [
        "S" => 1,
        "M" => 60,
        "H" => 3600,
        "D" => 86400,
        "SM" => 604800,
        "MS" => 2629800
    ];

    protected const TIEMPO = [
        1 => ['S', 'Segundos'],
        2 => ['M', 'Minutos'],
        3 => ['H', 'Horas'],
        4 => ['D', 'Dias'],
        5 => ['SM', 'Semanas'],
        6 => ['MS', 'Mes']
    ];
}

class conversionTiempo extends Tiempo
{
    public static function convertir_a_minutos($valor, $unidad_desde)
    {
        if (array_key_exists($unidad_desde, self::TIEMPO_SEGUNDOS)) {
            return $valor * self::TIEMPO_SEGUNDOS[$unidad_desde];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_desde_minutos($valor, $unidad_esperada)
    {
        if (array_key_exists($unidad_esperada, self::TIEMPO_SEGUNDOS)) {
            return $valor / self::TIEMPO_SEGUNDOS[$unidad_esperada];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_tiempo($valor, $unidad_desde, $unidad_esperada)
    {
        $valor_tiempo = self::convertir_a_minutos($valor, $unidad_desde);
        $resultado = self::convertir_desde_minutos($valor_tiempo, $unidad_esperada);
        return $resultado;
    }
}

class enviarValoresTiempo extends conversionTiempo
{
    public static function enviarValores($valor, $IUnidadC, $IUnidadR)
    {
        return self::convertir_tiempo($valor, self::TIEMPO[$IUnidadC][0], self::TIEMPO[$IUnidadR][0]) . ' ' . self::TIEMPO[$IUnidadR][0];
    }
}
