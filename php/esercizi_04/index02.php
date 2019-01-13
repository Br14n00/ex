<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>03-02</title>
    </head>
    <body>
        <?php
        //MCD  calcol massimo comune divisore
        function MCD($n1,$n2)
        {
            $r=0;
            while ($n2!=0) {
                $r = $n1 % $n2;
                $n1 = $n2;
                $n2 = $r;
            }
            return $n1;
        }
        echo MCD(12,39);
         ?>
    </body>
</html>
