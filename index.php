<?php
require_once('includes/menu.php');
require_once('includes/execT.php');
require_once('includes/config.php');


$init  = microtime(true);

class Calculadora
{
    public static function iniciarCalculadora() // Inicia la calculadora
    {
        echo "Bienvenido a la calculadora de magnitudes\n";
        echo "Seleccione una magnitud:\n";
        echo listarMenuMag::listar(Magnitudes::MAGNITUDES);
    }
}

// Muestra las unidades de medida, de cada magnitud
do {

    Calculadora::iniciarCalculadora();
    $key = readline("Elija magnitud o salir según su indice: ");

    while (VIMagnitudes::verificarIndiceMagnitudes($key) == false) {
        listarMenuMag::listar(Magnitudes::MAGNITUDES);
        $key = readline("Indice no encontrado, ingrese uno diferente: ");
    }
    mostrarMenu::menu($key);
    $total = execTime::time(jsonConf::getTimeConf(), $init);
} while ($key != 7);

if (jsonConf::getTimeConf() == true) {
    echo "\nel tiempo total de uso/ejecucion es: " . $total;
}
