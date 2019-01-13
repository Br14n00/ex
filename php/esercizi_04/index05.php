<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>03-05</title>
    </head>
    <body>
        <?php
        function nPrimo($n){
            if ($n==0) {
            return false;
            }
            for ($i=2; $i < $n/2 ; $i++) {
                if ($n%$i == 0) {
                    return false;
                }
            }
            return true;
        }
        $nMax = rand(50,100);
        echo $nMax." ";
        $a=0;
        while ($a <= $nMax) {
            if (nPrimo($a)) {
                echo $a." ";
            }
            $a++;
        }
         ?>
    </body>
</html>
