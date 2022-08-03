<?php
require_once('includes/magnitudes.php');
require_once('includes/longitudes.php');

class menu
{
    public static function menu($key)
    {
        switch ($key) {
            case 1:
                listarMagnitudes::listarLongitudes();
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC) == false) {
                    listarMagnitudes::listarLongitudes();
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::LONGITUDES[$IUnidadC] . "\n";
                if (verificaciones::verificarIndices($IUnidadC) == true) {
                    listarMagnitudes::listarLongitudes();
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR) == false) {
                        listarMagnitudes::listarLongitudes();
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::LONGITUDES[$IUnidadR] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR) == true) {
                            echo enviarValores::enviarValores($valor, $IUnidadC, $IUnidadR);
                        }
                    }
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
    }
}
