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
        echo listarMenuMag::listar(Magnitudes::MAGNITUDES);
    }
}

// Muestra las unidades de medida, de cada magnitud
do{
    Calculadora::iniciarCalculadora();
    $key = readline("Elija magnitud o salir según su indice: ");
    
    while (VIMagnitudes::verificarIndiceMagnitudes($key) == false) {
        listarMenuMag::listar(Magnitudes::MAGNITUDES);
        $key = readline("Indice no encontrado, ingrese uno diferente: ");
    }
    mostrarMenu::menu($key);
}while($key != 7);

<<<<<<< HEAD
mostrarMenu::menu($key);
echo "marica";
=======
>>>>>>> 955588d7eff37234e81217e5772b077d115a5427
