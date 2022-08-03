<?php
require_once('includes/magnitudes.php');
require_once('includes/longitudes.php');

class Calculadora
{

    public function iniciarCalculadora() // Inicia la calculadora
    {
        echo "Bienvenido a la calculadora de magnitudes\n";
        echo "Seleccione una magnitud:\n";
        echo listarMagnitudes::listarMagnitudes();
    }
}

$objCalculadora = new Calculadora();
echo $objCalculadora->iniciarCalculadora();

// Muestra las unidades de medida, de cada magnitud
$key = readline("Digite indice: ");
while (VIMagnitudes::verificarIndiceMagnitudes($key) == false) {
    listarMagnitudes::listarMagnitudes();
    $key = readline("Indice no encontrado, ingrese uno diferente: ");
}
switch ($key) {
    case 1:
        listarMagnitudes::listarLongitudes();
        $IUnidadC = readline('Indice de unidad a convertir: ');
        while (verificarIndices($IUnidadC) == false) {
            listarMagnitudes::listarLongitudes();
            $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
        }
        if (verificarIndices($IUnidadC) == true) {
            listarMagnitudes::listarLongitudes();
            $IUnidadR = readline('Indice de unidad a recibir: ');
            while (verificarIndices($IUnidadR) == false) {
                listarMagnitudes::listarLongitudes();
                $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
            }
            if (verificarIndices($IUnidadR) == true) {
                $valor = readline('Valor de unidad a convertir: ');
                if (unidadesSoportadas($valor, $IUnidadC, $IUnidadR) == true) {
                    echo enviarValores($valor, $IUnidadC, $IUnidadR);
                } else {
                    echo "Datos no soportados.";
                }
            } else {
                echo 'Indice no encontrado.';
            }
        } else {
            echo 'Indice no encontrado.';
        }
        break;
    case 2:
        listarMagnitudes::listarMasas();
        break;
    case 3:
        listarMagnitudes::listarVolumen();
        break;
    case 4:
        listarMagnitudes::listarDatos();
        break;
    case 5:
        listarMagnitudes::listarMonedas();
        break;
    case 6:
        listarMagnitudes::listarTiempo();
        break;
    default:
        echo 'El valor ingresado es invalido.';
        break;
}
