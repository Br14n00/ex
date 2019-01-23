<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizio</title>
    </head>
    <style media="screen">
        body{
            text-align: center;
            font-family: sans-serif;
            color:white;
            font-size: 20px;
        }
        div.insert{
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            background-color: green;
            width:400px;
            padding: 50px;
            border-radius: 150px;
        }
        b{
            vertical-align: -2px;
        }
    </style>
    <body>
        <div class="insert">
            <b>
                <?php
                $uE = $_POST["esponente"];
                $uB = $_POST["base"];
                echo "La ptenza base $uB ed esponente $uE risulta:</br></br>".pow($uB,$uE)."</br></br>";
                echo "<a href=\"index.html\">Pagina precedente</a>";
                 ?>
            </b>
        </div>
    </body>
</html>
