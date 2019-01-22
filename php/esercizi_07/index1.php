<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        $cognomi = file("dati/cognomi.txt");
        for ($i=0; $i < count($cognomi) ; $i++) {
            echo $cognomi[$i];
            // code...
        }

         ?>
    </body>
</html>
