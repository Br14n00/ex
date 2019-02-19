<?php

    echo "<div style=\" position:$pos ; background-color: $color;  width: 800px; \">"
    ?>

        <form onsubmit="submit" action="index.php" method="post">

            <input type="hidden" name="stato" value="3">

           <?php echo "<table style=\"position:$pos \">"?>
                <tbody>
                <tr>
                    <td>
                        <label for="Numero"> Colore </label>
                    </td>
                    <td>
                        <input type="number" id="Numero" name="Numero">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="OK" >
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
