<?php 
    class Magnitudes    {
    }
    
    class listarMagnitudes extends Magnitudes {

        public static function listarMagnitudes(){
            $MAGNITUDES = ['Longitud','Masa','Volumen','Datos','Moneda','Tiempo'];
            for ($i=0; $i < count($MAGNITUDES); $i++) { 
                echo $i + 1 . ". ". $MAGNITUDES[$i]."\n";
            }
        }

        public static function listarLongitudes(){
            $LONGITUDES = [
                1 => 'CM',
                2 => 'KM',
                3 => 'M',
                4 => 'Y', 
                5 => 'IN',
            ];
            for ($i = 1; $i < count($LONGITUDES) + 1; $i++) { 
                echo $i . ". ". $LONGITUDES[$i]."\n";
            }
        }

        public static function listarMasas(){
            $MASAS = ['OZ','LB','G', 'MG','KG',];
            for ($i=0; $i < count($MASAS); $i++) { 
                echo $i + 1 . ". ". $MASAS[$i]."\n";
            }
        }

        public static function listarVolumen(){
            $VOLUMEN = ['MM','CM','M', 'KL','DM',];
            for ($i=0; $i < count($VOLUMEN); $i++) { 
                echo $i + 1 . ". ". $VOLUMEN[$i]."\n";
            }
        }

        public static function listarDatos(){
            $DATOS = ['KB','MB','GB','TB','PB'];
            for ($i=0; $i < count($DATOS); $i++) { 
                echo $i + 1 . ". ". $DATOS[$i]."\n";
            }
        }

        public static function listarTiempo(){
            $TIEMPO = ['S', 'M','H','D','W'];
            for ($i=0; $i < count($TIEMPO); $i++) { 
                echo $i + 1 . ". ". $TIEMPO[$i]."\n";
            }
        }

        public static function listarMonedas(){
            $MONEDAS = ['USD','AUD','EUR','CAD','MXN'];
            for ($i=0; $i < count($MONEDAS); $i++) { 
                echo $i + 1 . ". ". $MONEDAS[$i]."\n";
            }
        }
    }

        
