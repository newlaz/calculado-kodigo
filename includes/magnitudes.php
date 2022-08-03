<?php
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
        1 => 'CM',
        2 => 'KM',
        3 => 'M',
        4 => 'Y',
        5 => 'IN',
    ];

    public const MASAS = [
        1 => 'OZ',
        2 => 'LB',
        3 => 'G',
        4 => 'MG',
        5 => 'KG',
    ];

    public const VOLUMEN = [
        1 => 'MM',
        2 => 'CM',
        3 => 'M',
        4 => 'KL',
        5 => 'DM',
    ];

    public const DATOS = [
        1 => 'KB',
        2 => 'MB',
        3 => 'GB',
        4 => 'TB',
        5 => 'PB'
    ];

    public const TIEMPO = [
        1 => 'S',
        2 => 'M',
        3 => 'H',
        4 => 'D',
        5 => 'W'
    ];

    public const MONEDAS = [
        1 => 'USD',
        2 => 'AUD',
        3 => 'EUR',
        4 => 'CAD',
        5 => 'MXN'
    ];
}

class listarMagnitudes extends Magnitudes 
{

    public static function listarMagnitudes()
    {
        for ($i = 1; $i < count(self::MAGNITUDES) + 1; $i++) {
            echo $i . ". " . self::MAGNITUDES[$i] . "\n";
        }
    }

    public static function listarLongitudes()
    {
        for ($i = 1; $i < count(self::LONGITUDES) + 1; $i++) {
            echo $i . ". " . self::LONGITUDES[$i] . "\n";
        }
    }

    public static function listarMasas()
    {
        for ($i = 1; $i < count(self::MASAS) + 1; $i++) {
            echo $i . ". " . self::MASAS[$i] . "\n";
        }
    }

    public static function listarVolumen()
    {

        for ($i = 1; $i < count(self::VOLUMEN) + 1; $i++) {
            echo $i . ". " . self::VOLUMEN[$i] . "\n";
        }
    }

    public static function listarDatos()
    {

        for ($i = 1; $i < count(self::DATOS) + 1; $i++) {
            echo $i . ". " . self::DATOS[$i] . "\n";
        }
    }

    public static function listarTiempo()
    {
        for ($i = 1; $i < count(self::TIEMPO) + 1; $i++) {
            echo $i . ". " . self::TIEMPO[$i] . "\n";
        }
    }

    public static function listarMonedas()
    {
        for ($i = 1; $i < count(self::MONEDAS) + 1; $i++) {
            echo $i . ". " . self::MONEDAS[$i] . "\n";
        }
    }
}

class VIMagnitudes extends Magnitudes
{
    public static function verificarIndiceMagnitudes($key)
    {
        $existe = false;
        if (array_key_exists($key, self::MAGNITUDES)) {
            $existe = true;
            return $existe;
        } else {
            return $existe;
        }
    }
}
