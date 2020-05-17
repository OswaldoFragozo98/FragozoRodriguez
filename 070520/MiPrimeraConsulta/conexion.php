<?php
$host_db="127.0.0.1";
$user_db="root";
$pass_db="";
$db_name="test_php";

$conexion = mysqli_connect($host_db,$user_db,$pass_db);

if($conexion){
    echo"<h1>Conexión establecida con exito</h1>";
}else{
    echo"<h1>Error de conexión</h1>";
}

?>
