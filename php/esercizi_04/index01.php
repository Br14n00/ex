<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>03-01</title>
    </head>
    <body>
        <?php
         function setOra($n){
             if ($n<10) {
                 return "0".$n;
             }
             return "$n";
         }
         function randOra(){
             $randOra = rand(0,23);
             $randMinuti = rand(0,59);
             return setOra($randOra).":".setOra($randMinuti);
         }
         echo randOra();
         ?>
    </body>
</html>
