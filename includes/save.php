<?php 

class save{

    public static function saveResult($info){

        $data = json_decode(file_get_contents('result.json'), true);
        
        $newValue = array(
            "results" => "$info     desu nyan OwO",
        );

        array_push($data, $newValue);
        $resultArray = $data;

        file_put_contents("result.json", json_encode($resultArray, JSON_PRETTY_PRINT), LOCK_EX);
        //print_r($deco["time"]);
        return true;

    }

    public static function eraseContent(){
        $data = json_decode(file_get_contents('result.json'), true);
        
        $newValue = array(
            
        );

        

        file_put_contents("result.json", json_encode($newValue, JSON_PRETTY_PRINT), LOCK_EX);
        //print_r($deco["time"]);
        return true;



    }

    public static function getContent(){
        $data = json_decode(file_get_contents('result.json'), true);
        foreach($data as $row){
            print_r($row["results"]);
            echo "\n\n\n";
        }

    }

}
?>