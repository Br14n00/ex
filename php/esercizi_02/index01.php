<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>01-01</title>
    </head>
    <body>
        <?php
         $dividendo = rand(10,99);
         $divisore = rand(10,99);
         ?>
         <ul>
             <li><?php  echo "Dividendo: ".$dividendo ;?></li>
             <li><?php  echo "Divisore: ".$divisore ;?></li>
             <li><?php  echo "Quoziente: ".(int)($dividendo/$divisore) ;?></li>
             <li><?php  echo "Quoziente: ".($dividendo%$divisore) ;?></li>
         </ul>
    </body>
</html>
