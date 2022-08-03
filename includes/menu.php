<?php
require_once('includes/magnitudes.php');
require_once('includes/longitudes.php');

class mostrarMenu
{
    public static function menu($key)
    {
        switch ($key) {
            case 1:
                listarLongitudes::listar();
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC) == false) {
                    listarLongitudes::listar();
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::LONGITUDES[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC) == true) {
                    listarLongitudes::listar();
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR) == false) {
                        listarLongitudes::listar();
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::LONGITUDES[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR) == true) {
                            echo $valor ." ". Magnitudes::LONGITUDES[$IUnidadC][1] . " en " . Magnitudes::LONGITUDES[$IUnidadR][1] . " = " . enviarValores::enviarValores($valor, $IUnidadC, $IUnidadR);
                        }
                    }
                }
                break;
            case 2:
                listarMasas::listar();
                break;
            case 3:
                listarMagnitudes::listar();;
                break;
            case 4:
                listarMagnitudes::listar();;
                break;
            case 5:
                listarMagnitudes::listar();;
                break;
            case 6:
                listarMagnitudes::listar();;
                break;
            default:
                echo 'El valor ingresado es invalido.';
                break;
        }
    }
}
