<?php

$dato1 = $_GET["num1"];
$dato2 = $_GET["num2"];
$dato3 = $_GET["num3"];

$total = $dato1+$dato2+$dato3;
echo "<br><br>";
echo "<table style ='border: 2px solid black; background-color:red;' align='center' >
        <tr>
            <td>
                <h1>El Resultado es: $total</h1>
            </td>
        </tr>
    </table>";
echo '<a href = "suma.php"><h2>Regresar pagina anterior</h2></a>';
?>
