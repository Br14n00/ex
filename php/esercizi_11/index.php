<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
    </style>
</head>
    <body>
        <?php
            if (!isset($_POST["stato"])){
                include ("pagNumUno.php");
            }elseif ($_POST["stato"]==2){
                $color=$_POST["Colore"];
                $pos=$_POST["Orientamento"];
                include ("pagNumDue.php");
            }else{
                $num=$_POST["Numero"];
                include ("pagNumTre.php");
            }

        ?>
    </body>
</html>