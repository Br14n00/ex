<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>03-06</title>
        <link href="css/stile.css">
    </head>
    <body>
        <?php
        $numeroRand = rand(0,1000);
        if ($numeroRand%30 == 0) {
            echo "<img src=\"img/Me.png\" alt=\"immagine cappelo\">";
        }else {
            echo "<h1>Non é un numero magico</h1>";
        }
         ?>
    </body>
</html>
