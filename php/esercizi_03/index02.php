<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>02-02</title>
    </head>
    <body>
        <?php
            $numeroSentinella=rand(0,100);
            $a=1;
            echo "<p> $numeroSentinella </p><p>";
            do {
                $numeroRandom=rand(0,100);
                if ($numeroSentinella<$numeroRandom) {
                    echo "<span style=\"color:red\">".$numeroRandom."</span> ";
                    $a++;
                }else {
                    echo $numeroRandom." ";
                }
            } while ($a <= 10);
            echo "</p>";
         ?>
    </body>
</html>
