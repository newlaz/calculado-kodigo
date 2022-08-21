<?php
require_once('includes/magnitudes.php');
require_once('includes/longitudes.php');
require_once('includes/menu.php');


class Calculadora
{

    public static function iniciarCalculadora() // Inicia la calculadora
    {
        echo "Bienvenido a la calculadora de magnitudes\n";
        echo "Seleccione una magnitud:\n";
        echo listarMenuMag::listar(Magnitudes::MAGNITUDES);;
    }
}

echo Calculadora::iniciarCalculadora();

// Muestra las unidades de medida, de cada magnitud
$key = readline("Elija magnitud según su indice: ");
while (VIMagnitudes::verificarIndiceMagnitudes($key) == false) {
    listarMenuMag::listar(Magnitudes::MAGNITUDES);
    $key = readline("Indice no encontrado, ingrese uno diferente: ");
}

mostrarMenu::menu($key);
echo "marica";