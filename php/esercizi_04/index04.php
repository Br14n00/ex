<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>03-04</title>
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
        $a = 1;
        $n = 0;
        do {
            if (nPrimo($n)) {
                $a++;
                echo $n." ";
            }
            $n++;
        } while ($a <= 10);


         ?>
    </body>
</html>
