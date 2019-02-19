<div style=" margin:auto,width: 800px; ">
    <h1>
        Impostazioni
    </h1>
    <form onsubmit="submit" action="index.php" method="post">
        <input type="hidden" name="stato" value="2">
        <table style=" margin:auto">
            <tbody>
            <tr>
                <td>
                    <label for="Colore">Colore</label>
                </td>
                <td>
                    <input type="color" id="Colore" name="Colore">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Orientamento">Orientamento</label>
                </td>
                <td>
                    <select name="Orientamento" id="Orientamento">
                        <option value="right">Destra</option>
                        <option value="left">Sinistra</option>
                        <option value="center">Centro</option>

                    </select>
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
