<?php
// Length
const LONGITUD_A_METROS = [
    "IN" => 0.0254,
    "Y" => 0.9144,
    "CM" => 0.01,
    "M" => 1,
    "KM" => 1000,
];

const LONGITUDES = [
    1 => 'CM',
    2 => 'KM',
    3 => 'M',
    4 => 'Y', 
    5 => 'IN',
];

function convertir_a_metros($valor, $unidad_desde)
{
    if (array_key_exists($unidad_desde, LONGITUD_A_METROS)) {
        return $valor * LONGITUD_A_METROS[$unidad_desde];
    } else {
        return "Unidad no soportada.";
    }
}

function convertir_desde_metros($valor, $unidad_esperada)
{
    if (array_key_exists($unidad_esperada, LONGITUD_A_METROS)) {
        return $valor / LONGITUD_A_METROS[$unidad_esperada];
    } else {
        return "Unidad no soportada.";
    }
}

function convertir_longitud($valor, $unidad_desde, $unidad_esperada)
{
    $valor_metros = convertir_a_metros($valor, $unidad_desde);
    $resultado = convertir_desde_metros($valor_metros, $unidad_esperada);
    return $resultado;
}

function unidadesSoportadas($valor, $IUnidadC, $IUnidadR){
    $soportado = false;
    if (array_key_exists($IUnidadC, LONGITUDES) && array_key_exists($IUnidadR, LONGITUDES) && is_numeric($valor)) {
        $soportado = true;
        return $soportado;
    } else {
        return $soportado;
    }
}

function enviarValores($valor, $IUnidadC, $IUnidadR)
{
    return convertir_longitud($valor, LONGITUDES[$IUnidadC], LONGITUDES[$IUnidadR]) .' '. LONGITUDES[$IUnidadR];
}

function verificarIndices($indice){
    $existe = false;
    if (array_key_exists($indice, LONGITUDES)) {
        $existe = true;
        return $existe;
    } else {
        return $existe;
    }
}