<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title>03-03</title>
    </head>
    <body>
        <?php
        function MCD($n1,$n2){
            if ($n2==0) {
                return $n1;
            }else {
                $r=$n1%$n2;
                return MCD($n2,$r);
            }
        }
        echo MCD(12,39);
         ?>
    </body>
</html>
