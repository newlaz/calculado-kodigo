<?php
require_once('includes/magnitudes.php');
require_once('includes/longitudes.php');
require_once('includes/verificacion.php');

class mostrarMenu
{
    public static function menu($key)
    {
        switch ($key) {
            case 1:
                listarMagnitudes::listar(Magnitudes::LONGITUDES);
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC, Magnitudes::LONGITUDES) == false) {
                    listarMagnitudes::listar(Magnitudes::LONGITUDES);
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::LONGITUDES[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC, Magnitudes::LONGITUDES) == true) {
                    listarMagnitudes::listar(Magnitudes::LONGITUDES);
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR, Magnitudes::LONGITUDES) == false) {
                        listarMagnitudes::listar(Magnitudes::LONGITUDES);
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::LONGITUDES[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR, Magnitudes::LONGITUDES) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR, Magnitudes::LONGITUDES) == true) {
                            echo $valor . " " . Magnitudes::LONGITUDES[$IUnidadC][1] . " en " . Magnitudes::LONGITUDES[$IUnidadR][1] . " = " . enviarValores::enviarValores($valor, $IUnidadC, $IUnidadR) . "\n";
                        }
                    }
                }
                break;
            case 2:
                listarMagnitudes::listar(Magnitudes::MASA);
                break;
            case 3:
                listarMagnitudes::listar(Magnitudes::VOLUMEN);
                break;
            case 4:
                listarMagnitudes::listar(Magnitudes::DATOS);
                break;
            case 5:
                listarMagnitudes::listar(Magnitudes::MONEDAS);
                break;
            case 6:
                listarMagnitudes::listar(Magnitudes::TIEMPO);
                break;
            case 7:
                echo 'Usted salió del programa.';
                break;
            default:
                echo 'El valor ingresado es invalido.';
                break;
        }
    }
}
