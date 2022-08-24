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
        7 => 'Salir',
        8 => 'Configuracion'
    ];

    public const LONGITUDES = [
        1 => ['CM', 'Centimetros'],
        2 => ['KM', 'Kilometros'],
        3 => ['M', 'Metros'],
        4 => ['Y', 'Yardas'],
        5 => ['IN', 'Pulgadas']
    ];

    public const MASAS = [
        1 => ['OZ', 'Onzas'],
        2 => ['LB', 'Libras'],
        3 => ['MG', 'Miligramos'],
        4 => ['G', 'Gramos'],
        5 => ['KG', 'Kilogramos']
    ];

    public const VOLUMEN = [
        1 => ['MM3','Milimetros Cúbicos' ],
        2 => ['CM3','Centimetros Cúbicos' ],
        3 => ['M3', 'Metros Cúbicos'],
        4 => ['L', 'Litros'],
        5 => ['FT3', 'Pies Cúbicos']
    ];

    public const DATOS = [
        1 => ['B','Bytes' ],
        2 => ['KB','Kilobytes' ],
        3 => ['MB', 'Megabytes'],
        4 => ['GB', 'Gigabytes'],
        5 => ['TB', 'Terabytes']
    ];

    public const TIEMPO = [
        1 => ['M', 'Minutos'],
        2 => ['H', 'Horas'],
        3 => ['D', 'Dias'],
        4 => ['SM', 'Semanas'],
        5 => ['MS', 'Mes']
    ];

    public const MONEDAS = [
        1 => ['USD', 'Dolares'],
        2 => ['EUR', 'Euros'],
        3 => ['GBP', 'Libra Esterlina'],
        4 => ['RUB', 'Rublos'],
        5 => ['CNY', 'Yuanes']
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