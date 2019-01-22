<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizio</title>
    </head>
    <body>
        <?php
            $array =  [1,1,1,1,1,0,1];

            function powMy($n,$e){
                $nPow = 1;
                for ($i=0; $i < $e; $i++) {
                    $nPow *= 2;
                }
                return $nPow;
            }
            function arrayBinToDec($a){
                $numeroDec = 0;
                for ($i=0; $i < count($a) ; $i++) {
                    if ($a[$i]!=0) {
                        //$numeroDec += pow(2,count($a)-1 - $i);
                        $numeroDec += powMy(2,count($a)-1 - $i);
                    }
                }
                return $numeroDec;
            }
            echo arrayBinToDec($array);
         ?>
    </body>
</html>
