<?php
require_once('includes/magnitudes.php');
require_once('includes/longitudes.php');
require_once('includes/verificacion.php');
require_once('includes/volumenes.php');
require_once('includes/datos.php');
require_once('includes/tiempo.php');
require_once('includes/monedas.php');
require_once('includes/config.php');
require_once('includes/save.php');
require_once('includes/masas.php');

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
                            $Lmag1 = Magnitudes::LONGITUDES[$IUnidadC][1];
                            $Lmag2 = Magnitudes::LONGITUDES[$IUnidadR][1];
                            $Lmag3 = enviarValores::enviarValores($valor, $IUnidadC, $IUnidadR);
                            $info = "$valor $Lmag1 en $Lmag2 es igual a: $Lmag3";

                            save::saveResult($info);
                        }
                    }
                }
                sleep(2);
                break;
            case 2:
                listarMagnitudes::listar(Magnitudes::MASAS);
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC, Magnitudes::MASAS) == false) {
                    listarMagnitudes::listar(Magnitudes::MASAS);
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::VOLUMEN[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC, Magnitudes::MASAS) == true) {
                    listarMagnitudes::listar(Magnitudes::MASAS);
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR, Magnitudes::MASAS) == false) {
                        listarMagnitudes::listar(Magnitudes::MASAS);
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::MASAS[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR, Magnitudes::MASAS) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR, Magnitudes::MASAS) == true) {
                            echo $valor . " " . Magnitudes::MASAS[$IUnidadC][1] . " en " . Magnitudes::MASAS[$IUnidadR][1] . " = " . enviarValoresMasas::enviarValores($valor, $IUnidadC, $IUnidadR) . "\n";
                            $Lmag1 = Magnitudes::MASAS[$IUnidadC][1];
                            $Lmag2 = Magnitudes::MASAS[$IUnidadR][1];
                            $Lmag3 = enviarValoresMasas::enviarValores($valor, $IUnidadC, $IUnidadR);
                            $info = "$valor $Lmag1 en $Lmag2 es igual a: $Lmag3";

                            save::saveResult($info);  
                        }
                    }
                }
                sleep(2);
                break;
            case 3:
                listarMagnitudes::listar(Magnitudes::VOLUMEN);
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC, Magnitudes::VOLUMEN) == false) {
                    listarMagnitudes::listar(Magnitudes::VOLUMEN);
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::VOLUMEN[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC, Magnitudes::VOLUMEN) == true) {
                    listarMagnitudes::listar(Magnitudes::VOLUMEN);
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR, Magnitudes::VOLUMEN) == false) {
                        listarMagnitudes::listar(Magnitudes::VOLUMEN);
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::VOLUMEN[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR, Magnitudes::VOLUMEN) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR, Magnitudes::VOLUMEN) == true) {
                            echo $valor . " " . Magnitudes::VOLUMEN[$IUnidadC][1] . " en " . Magnitudes::VOLUMEN[$IUnidadR][1] . " = " . enviarValoresVolumen::enviarValores($valor, $IUnidadC, $IUnidadR) . "\n";
                            $Lmag1 = Magnitudes::VOLUMEN[$IUnidadC][1];
                            $Lmag2 = Magnitudes::VOLUMEN[$IUnidadR][1];
                            $Lmag3 = enviarValoresVolumen::enviarValores($valor, $IUnidadC, $IUnidadR);
                            $info = "$valor $Lmag1 en $Lmag2 es igual a: $Lmag3";

                            save::saveResult($info);
                        }
                    }
                }
                sleep(2);
                break;
            case 4:
                listarMagnitudes::listar(Magnitudes::DATOS);
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC, Magnitudes::DATOS) == false) {
                    listarMagnitudes::listar(Magnitudes::DATOS);
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::DATOS[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC, Magnitudes::DATOS) == true) {
                    listarMagnitudes::listar(Magnitudes::DATOS);
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR, Magnitudes::DATOS) == false) {
                        listarMagnitudes::listar(Magnitudes::DATOS);
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::DATOS[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR, Magnitudes::DATOS) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR, Magnitudes::DATOS) == true) {
                            echo $valor . " " . Magnitudes::DATOS[$IUnidadC][1] . " en " . Magnitudes::DATOS[$IUnidadR][1] . " = " . enviarValoresDatos::enviarValores($valor, $IUnidadC, $IUnidadR) . "\n";
                            $Lmag1 = Magnitudes::DATOS[$IUnidadC][1];
                            $Lmag2 = Magnitudes::DATOS[$IUnidadR][1];
                            $Lmag3 = enviarValoresDatos::enviarValores($valor, $IUnidadC, $IUnidadR);
                            $info = "$valor $Lmag1 en $Lmag2 es igual a: $Lmag3";

                            save::saveResult($info);
                        }
                    }
                }
                sleep(2);
                break;
            case 5:
                listarMagnitudes::listar(Magnitudes::MONEDAS);
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC, Magnitudes::MONEDAS) == false) {
                    listarMagnitudes::listar(Magnitudes::MONEDAS);
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::MONEDAS[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC, Magnitudes::MONEDAS) == true) {
                    listarMagnitudes::listar(Magnitudes::MONEDAS);
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR, Magnitudes::MONEDAS) == false) {
                        listarMagnitudes::listar(Magnitudes::MONEDAS);
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::MONEDAS[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR, Magnitudes::MONEDAS) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR, Magnitudes::MONEDAS) == true) {
                            echo $valor . " " . Magnitudes::MONEDAS[$IUnidadC][1] . " en " . Magnitudes::MONEDAS[$IUnidadR][1] . " = " . enviarValoresMonedas::enviarValores($valor, $IUnidadC, $IUnidadR) . "\n";
                            $Lmag1 = Magnitudes::MONEDAS[$IUnidadC][1];
                            $Lmag2 = Magnitudes::MONEDAS[$IUnidadR][1];
                            $Lmag3 = enviarValoresMonedas::enviarValores($valor, $IUnidadC, $IUnidadR);
                            $info = "$valor $Lmag1 en $Lmag2 es igual a: $Lmag3";

                            save::saveResult($info);
                        }
                    }
                }
                sleep(2);
                break;
            case 6:
                listarMagnitudes::listar(Magnitudes::TIEMPO);
                echo "MAGNITUD A CONVERTIR\n";
                $IUnidadC = readline('Indice de unidad a convertir: ');
                while (verificaciones::verificarIndices($IUnidadC, Magnitudes::TIEMPO) == false) {
                    listarMagnitudes::listar(Magnitudes::TIEMPO);
                    echo "MAGNITUD A CONVERTIR\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . Magnitudes::TIEMPO[$IUnidadC][1] . "\n";
                if (verificaciones::verificarIndices($IUnidadC, Magnitudes::TIEMPO) == true) {
                    listarMagnitudes::listar(Magnitudes::TIEMPO);
                    echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                    $IUnidadR = readline('Indice de unidad a recibir: ');
                    while (verificaciones::verificarIndices($IUnidadR, Magnitudes::TIEMPO) == false) {
                        listarMagnitudes::listar(Magnitudes::TIEMPO);
                        echo "MAGNITUD QUE ESPERAS RECIBIR\n";
                        $IUnidadR = readline('Indice no encontrado, ingrese uno diferente: ');
                    }
                    echo 'Usted seleccionó: ' . Magnitudes::TIEMPO[$IUnidadR][1] . "\n";
                    if (verificaciones::verificarIndices($IUnidadR, Magnitudes::TIEMPO) == true) {
                        echo "VALOR A CONVERTIR\n";
                        $valor = readline('Valor de unidad a convertir: ');
                        while (verificaciones::verificarValorNumerico($valor) == false) {
                            echo "VALOR A CONVERTIR\n";
                            $valor = readline('Valor de unidad a convertir no soportado, intente con otro valor: ');
                        }
                        if (verificaciones::unidadesSoportadas($valor, $IUnidadC, $IUnidadR, Magnitudes::TIEMPO) == true) {
                            echo $valor . " " . Magnitudes::TIEMPO[$IUnidadC][1] . " en " . Magnitudes::TIEMPO[$IUnidadR][1] . " = " . enviarValoresTiempo::enviarValores($valor, $IUnidadC, $IUnidadR) . "\n";
                            $Lmag1 = Magnitudes::TIEMPO[$IUnidadC][1];
                            $Lmag2 = Magnitudes::TIEMPO[$IUnidadR][1];
                            $Lmag3 = enviarValoresTiempo::enviarValores($valor, $IUnidadC, $IUnidadR);
                            $info = "$valor $Lmag1 en $Lmag2 es igual a: $Lmag3";

                            save::saveResult($info);
                        }
                    }
                }
                sleep(2);
                break;
            case 7:
                echo 'Usted salió del programa.';
                break;
            case 8:
                configList::listarConf();
                echo "SELECCIONAR CONFIGURACION DESEADA\n";
                $IUnidadC = readline('Indice de configuracion: ');
                while (verificaciones::verificarIndices($IUnidadC, configuracion::CONF) == false) {
                    configList::listarConf();
                    echo "SELECCIONE una de las configuraciones disponibles\n";
                    $IUnidadC = readline('Indice no encontrado, ingrese uno diferente: ');
                }
                echo 'Usted seleccionó: ' . configuracion::CONF[$IUnidadC] . "\n\n";
               
                sendConf::enviarConf($IUnidadC);
                sleep(2);
                    
                
                break;
            
            default:
                echo 'El valor ingresado es invalido.';
                sleep(1);
                break;
        }
    }
}
