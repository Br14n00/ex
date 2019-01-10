<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>01-03</title>
    </head>
    <body>
        <?php
        $num1 =rand(10,99);
        $num2 =rand(10,99);
        $num3 =rand(10,99);
        $media = ($num1+$num2+$num3)/3;

        echo "<ul>\n";
        echo "\t\t<li> n1 $num1</li>\n";
        echo "\t\t<li> n2 $num2</li>\n";
        echo "\t\t<li> n3 $num3</li>\n";
        echo "\t</ul>\n";
        echo "<script>alert($media);</script>";
         ?>
    </body>
</html>
