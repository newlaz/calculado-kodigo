
<?php
class Tiempo
{
    protected const TIEMPO_MINUTOS = [
        "M" => 1,
        "H" => 60,
        "D" => 1440,
        "SM" => 10080,
        "MS" => 43800,
    ];

    protected const TIEMPO = [
        1 => ['M', 'Minutos'],
        2 => ['H', 'Horas'],
        3 => ['D', 'Dias'],
        4 => ['SM', 'Semanas'],
        5 => ['MS', 'Mes']
    ];
}

class conversionTiempo extends Tiempo
{
    public static function convertir_a_minutos($valor, $unidad_desde)
    {
        if (array_key_exists($unidad_desde, self::TIEMPO_MINUTOS)) {
            return $valor * self::TIEMPO_MINUTOS[$unidad_desde];
        } else {
            return "Unidad no soportada.";
        }
    }

    public static function convertir_desde_minutos($valor, $unidad_esperada)
    {
        if (array_key_exists($unidad_esperada, self::TIEMPO_MINUTOS)) {
            return $valor / self::TIEMPO_MINUTOS[$unidad_esperada];
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
