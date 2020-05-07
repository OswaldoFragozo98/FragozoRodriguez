<?php

$dato1 = $_POST ["txtdiasemana"];

if($dato1 == "Lunes" || $dato1 == "Martes" || $dato1 == "Miercoles" || $dato1 == "Jueves" || $dato1 == "Viernes"){
    echo "Dia laboral";
    echo '<a href="Ejercicios.php" >Regresar a la pagina anterior </a>';
}elseif($dato1 == "Sabado" || $dato1 == "Domingo") {
    echo "Dia de descanso";
    echo '<a href="Ejercicios.php" >Regresar a la pagina anterior </a>';
}else{
    echo "Parametro invalido";
    echo '<a href="Ejercicios.php" >Regresar a la pagina anterior </a>';
}

?>