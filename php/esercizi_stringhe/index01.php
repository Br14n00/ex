<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        // apriamo il file
          $f = fopen("regioni.txt","r");
          $arrayRegioni=array();
          do {
              $riga = fgets($f);
              //tolgo gli spazi
              $riga =trim($riga);
              //riempo un array delle regioni
              if($riga!=""){
                  array_push($arrayRegioni,$riga);
              }
          } while (!feof($f));

         $regioneScelta = $arrayRegioni[rand(0,count($arrayRegioni)-1)];

         $dimRS = strlen($regioneScelta);
         $trattini = array_fill(0,$dimRS-1,"_");

         $trattini[0]=$regioneScelta[0];
         $trattini[-1]=$regioneScelta[-1];
         echo "<p>".implode(" ",$trattini)."</p>";

         $arreyControl = array("#");

         $fineLettere=0;
         do {
             $valoreR  = rand(1,$dimRS-1);
            if (!in_array($valoreR,$arreyControl)) {
                array_push($arreyControl,$valoreR);
                $trattini[$valoreR-1]=$regioneScelta[$valoreR-1];
                echo "<p>".implode(" ",$trattini)."</p>";
                $fineLettere++;
            }
        } while ($fineLettere <= $dimRS-2);

         ?>
    </body>
</html>
