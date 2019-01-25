<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <style media="screen">
    body{
        text-align: center;
    }
        div.popup{
            display: inline-block;
            margin-top: 150px;
            margin-left: auto;
            margin-right: auto;
            width: 400px;
            padding: 20px;
            background-color: yellow;
            border: 3px solid black;
            border-radius: 120px;
        }
    </style>
    <body>
        <div class="popup">
            <?php
            $uName = $_POST["nome"];
            $uCognome = $_POST["cognome"];
            $uSesso = $_POST["sesso"];

            if ($uName =="" || $uCognome=="") {
                echo "<p>Attenzione: Dati Mancanti</p>";
                echo "Torna alla<a href=\"index.html\"> pagina precedente</a>";
            } else {
                $gender = ($uSesso=="uomo")? "Benvenuto signor":"Benvenuta signora";
                echo $gender." <b>".$uName."</b> <b>".$uCognome."</b>";
            }

            ?>
        </div>

    </body>
</html>
