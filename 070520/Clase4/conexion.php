<?php
$host_db="127.0.0.1";
$user_db="root";
$pass_db="";
$db_name="fes_aragon";

$conexion = mysqli_connect($host_db,$user_db,$pass_db);

if($conexion){
    echo"<h1>MySQL le esta dando permisos para ejecutar consultas</h1>";
}else{
    echo"<h1>MySQL no le esta dando permisos para ejecutar consultas posible problema de pass y user</h1>";
}

?>