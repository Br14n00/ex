<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        function doppiNumeri($array){
            $iter = count($array);
            sort($array);
            $numD = 0;
            $n=0;
            $arrayResult =array();
            for ($i=0; $i < $iter-1 ; $i++) {
                if ($array[$i] == $array[$i+1]) {
                    $n ++;
                }else{
                    array_push($arrayResult,$array[$i]." ".$n);
                    $n=0;
                }
            }
            return $arrayResult;
        }
         $ciao =array(7,7,7,7,1,2,3,4,4,5,6,8,9);
         for ($i=0; $i <count(doppiNumeri($ciao)) ; $i++) {
             echo "<p>".doppiNumeri($ciao)[$i]."</p>";
         }
         ?>
    </body>
</html>
