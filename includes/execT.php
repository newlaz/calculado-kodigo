<?php
class execTime{
    public static function time($endOrNot, $init){
        while($endOrNot != false){ 
            $end = microtime(true);
            //echo "\ntime: ".round($end - $init, 2)."\n";
            return round($end - $init, 2);
        }
    }
}
