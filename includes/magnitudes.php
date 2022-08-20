<?php
interface IListar
{
    public static function listar($objArray);
}
class Magnitudes
{
    public const MAGNITUDES = [
        1 => 'Longitud',
        2 => 'Masa',
        3 => 'Volumen',
        4 => 'Datos',
        5 => 'Moneda',
        6 => 'Tiempo',
    ];

    public const LONGITUDES = [
        1 => ['CM', 'Centimetros'],
        2 => ['KM', 'Kilometros'],
        3 => ['M', 'Metros'],
        4 => ['Y', 'Yardas'],
        5 => ['IN', 'Pulgadas']
    ];

    public const MASA = [
        1 => ['G', 'Gramos'],
        2 => ['DAG', 'Decagramos'],
        3 => ['HG', 'Hectogramos'],
        4 => ['DG', 'Decigramos'],
        5 => ['KG', 'Kilogramos']
    ];

    public const VOLUMEN = [
        1 => [0,'MM'],
        2 => [0,'CM'],
        3 => [0,'M'],
        4 => [0,'KL'],
        5 => [0,'DM']
    ];

    public const DATOS = [
        1 => [0,'KB'],
        2 => [0,'MB'],
        3 => [0,'GB'],
        4 => [0,'TB'],
        5 => [0,'PB']
    ];

    public const TIEMPO = [
        1 => ['S', 'Segundos'],
        2 => ['M', 'Minutos'],
        3 => ['H', 'Horas'],
        4 => ['D', 'Dias'],
        5 => ['W', 'Semanas']
    ];

    public const MONEDAS = [
        1 => ['USD', 'Dolar'],
        2 => ['EUR', 'Euro'],
        3 => ['GBP', 'Libra Esterlina'],
        4 => ['RUB', 'Rublo'],
        5 => ['CNY', 'Yuan']
    ];
}

class listarMagnitudes extends Magnitudes implements IListar
{
    public static function listar($objArray)
    {
        for ($i = 1; $i < count($objArray) + 1; $i++) {
            print_r( $i . ". ".$objArray[$i][1]. "\n");
        }
    }
}

class listarMenuMag extends Magnitudes implements IListar
{
    public static function listar($objArray)
    {
        $objArray = Magnitudes::MAGNITUDES;

        for ($i = 1; $i < count($objArray) + 1; $i++) {
            print_r( $i . ". ".$objArray[$i]. "\n");
        }
    }
}

class VIMagnitudes extends Magnitudes
{
    public static function verificarIndiceMagnitudes($key)
    {
        if (array_key_exists($key, self::MAGNITUDES)) {
            return true;
        } else {
            return false;
        }
    }
}