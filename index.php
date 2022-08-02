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
switch ($key) {
    case 1:
        listarMagnitudes::listarLongitudes();
        $IUnidadC = readline('Indice de unidad a convertir: ');
        if (verificarIndices($IUnidadC) == true) {
            $IUnidadR = readline('Indice de unidad a recibir: ');
            $valor = readline('Valor de unidad a convertir: ');
            if (unidadesSoportadas($valor, $IUnidadC, $IUnidadR) == true) {
                echo enviarValores($valor, $IUnidadC, $IUnidadR);
            } else {
                echo "Datos no soportados.";
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
