<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cognomi Comuni</title>
    </head>
    <body>
        <?php
            //apriamo il file
            $f = fopen("cognomi.txt","r");

            //apriamo un elenco
            echo "<ul>";
            do {
                // leggo una riga
                $riga = fgets($f);
                $riga = trim($riga);

            } while (!feof($f));
            echo "<ul>";
            fclose($f);
         ?>
    </body>
</html>
