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
            text-align: center;
        }
    </style>
    <body>
        <?php
        function nPrimo($num){
            for ($i=2; $i < $num/2 ; $i++) {
                if ($num%$i==0) {
                    return false;
                }
            }
            if($num!=1)
                return true;
            return false;

        }
         ?>
         <div class="insert">
             <p>
                 <?php
                 $numU = $_GET["numero"];
                  echo (nPrimo($numU))? " il numero è primo" : "il numero non è primo";
                    ?>
                <a href="index.html">Tornaalla pagina precedente</a>
             </p>
         </div>
    </body>
</html>
