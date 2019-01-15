<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        function invertiArray($array){
            $big = array();
            for ($i = count($array)-1; $i >= 0 ; $i--) {
                array_push($big,$array[$i]);
            }
            return $big;
        }
        $a = array(0,12,4,5);
        $b = invertiArray($a);
        echo $b[0].$b[1].$b[2].$b[3];
         ?>
    </body>
</html>
