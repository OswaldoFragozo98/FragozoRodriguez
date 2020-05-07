<?php

//Get -> txt "oswaldo"
$dato = $_GET["txtnombre"]; //esto es un arreglo para almacenar cadena de caracteres

if ($dato == "oswaldo"){
    echo "<h1>Hola</h1>".$dato. "<h1>eres la persona esperada</h1>";
}else{
    echo "<h2> Eres alguien diferente</h2>";
    echo "<br>";
    echo '<a href="formulario.php" >Regresar a la pagina anterior</a>';
}

?>