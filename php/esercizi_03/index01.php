<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>02-01</title>
    </head>
    <body>
        <?php
        function setOrario($n){
            if ($n<10) {
                return "0$n";
            }
            return $n;
        }
         $oraIniziale = rand(0,23);
         $minutiIniziali = rand(0,59);
         $minutiAggiunti = rand(100,200);
         echo "Ora iniziale: ".setOrario($oraIniziale).":".setOrario($minutiIniziali)."\n";
         echo "Minuti aggiunti: ".$minutiAggiunti."\n";
         $minutiFinali =($minutiIniziali+$minutiAggiunti)%60;
         $oraFinale = $oraIniziale+(int)(($minutiAggiunti+ $minutiFinali)/60);
         echo "Ora finale: ". setOrario($oraFinale).":".setOrario($minutiFinali)."\n";
         ?>
    </body>
</html>
