<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <style media="screen">
        body{
            text-align: center;
        }
        table{
            margin:auto;
            width: 800px;
        }
        th,td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <body>
        <?php
        $regioni = file("regioni.txt");
        $provincie = file("province.txt");

        $righeTabella = array();

        function swap(&$array,$id1,$id2){
            $aTemp = $array[$id1];
            $array[$id1] = $array[$id2];
            $array[$id2] = $aTemp;
        }

        function  minore(&$array,$min,$id){ //ritorna vero se id è piu grande di min
                //echo "<p>".$array[$min]["provincia"]."<".$array[$id]["provincia"]."</p>";
                if ($array[$min]["provincia"] < $array[$id]["provincia"]) {
                    return 0;
                }else {
                    return 1;
                }
        }

        function minimo(&$array,$iniz,$fine){ //fine = ultimo idice array
            $indMin = $iniz;
            for ($i=$iniz+1; $i <= $fine ; $i++) {
                if (minore($array,$indMin,$i)) {
                    $indMin=$i;
                }
            }
            return $indMin;
        }

        function ordinamento(&$array,$fine){
            for ($i=1; $i <=$fine ; $i++) {
                $minTrov = minimo($array,$i,$fine);
                /*echo "<p>".$minTrov."-".$array[$minTrov]["provincia"]."-".$fine."</p>";*/
                swap($array,$i,$minTrov);
            }
        }

        $num = 0;
        for ($i=0; $i < count($regioni) ; $i++) {
            $listProvince = explode(",",trim($provincie[$i]));

            for ($j=0; $j < count($listProvince) ; $j++) {
                $num++;
                $righeTabella[$num]["provincia"]= trim($listProvince[$j]);
                $righeTabella[$num]["regione"] = trim($regioni[$i]);
            }
        }


        ordinamento($righeTabella,count($righeTabella));

        echo "<table><thead><tr><th>ID</th>";

        foreach ($righeTabella[1] as $key => $value) {
            echo  "<th>".$key."</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        foreach ($righeTabella as $key => $value) {
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>";
            print_r($value["provincia"]);
            echo"</td>";
            echo "<td>";
            print_r($value["regione"]);
            echo"</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";




         ?>
    </body>
</html>
