<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
    <?php
    echo "<body style=\"background-color: $color; text-align: $pos;\">";

    $num=$_POST["Numero"];
    for($i=10; $i<$num+10 ; $i++ ){
    echo "<p>". $i ."<p>";
    }
    ?>
    </body>
</html>