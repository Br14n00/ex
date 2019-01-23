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
        <?php
        function fattoriale($num){
            if ($num==0) {
                return $num;
            }
            $fact = 1;
            for ($i=1; $i <= $num; $i++) {
                $fact *= $i;
            }
            return $fact;
        }
         ?>
        <div class="insert">
            <b>
                <?php
                $uNum = $_GET["numero"];
                echo "Il fattoriale di $uNum è:</br></br>".fattoriale($uNum)."</br></br>";
                echo "<a href=\"index.html\">Pagina precedente</a>";
                 ?>
            </b>
        </div>
    </body>
</html>
