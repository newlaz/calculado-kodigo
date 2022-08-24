<?php
require_once("save.php");

class configuracion{

    public const CONF = [
    1=>'mostrar tiempo de ejecucion', 
    2=>'desactivar tiempo de ejecucion',
    3=>'mostrar antiguos resultados',
    4=>'borrar lista de resultados'
]; 
    
}

class configList{

    public static function listarConf()
    {
        $objArray = configuracion::CONF;

        for ($i = 1; $i < count($objArray) + 1; $i++) {
            print_r( $i . ". ".$objArray[$i]. "\n");
        }
    }

}


class jsonConf{

    public static function getTimeConf(){

        $deco = json_decode(file_get_contents('conf.json'), true);
        
        //print_r($deco["time"]);
        return $deco["time"];

    }


    public static function setTimeConf($timeOp){
        $deco = json_decode(file_get_contents('conf.json'), true);
        
        $newValue = array(
            "time" => $timeOp
        );

        
        
        file_put_contents("conf.json", json_encode($newValue, JSON_PRETTY_PRINT), LOCK_EX);
        //print_r($deco["time"]);
        return $deco["time"];


    }

    
}

class sendConf{

    public static function enviarConf($op){
        $option = (int)$op;

        if($option == 1){
            jsonConf::setTimeConf(true);

        }elseif($option == 2){
            jsonConf::setTimeConf(false);

        }elseif($option == 3){

            save::getContent();

        }elseif($option == 4){

            save::eraseContent();


        }

    }

}


?>