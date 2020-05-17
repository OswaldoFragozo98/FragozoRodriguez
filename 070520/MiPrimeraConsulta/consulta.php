<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Consulta</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
</html>
<?php

require ("conexion.php");

$conexion = new mysqli('127.0.0.1','root','','test_php');
$consulta_sql = "SELECT * FROM persona";
$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado);

echo "<table  align='center'>
<thead>
<tr>
    <th>Usuario</th>
    <th>Carrera</th>
    <th>No Cuenta Institutocional</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Correo electronico</th>
    <th>Contraseña</th>
    <th>Fecha de Registrado</th>
</tr>
</thead>
<body>";

if ($count > 0){
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>".$row['nombre_usuario'] ."</td>";
        echo "<td>".$row['carrera'] ."</td>";
        echo "<td>".$row['no_cuenta'] ."</td>";
        echo "<td>".$row['direcion'] ."</td>";
        echo "<td>".$row['telefono'] ."</td>";
        echo "<td>".$row['email'] ."</td>";
        echo "<td>".$row['password'] ."</td>";
        echo "<td>".$row['FechaRegistro'] ."</td>";
        echo "</tr>";
    }
    echo "</tr>
    </body>";
}else{
    echo "<h1 style='color:red'>No hay registros</h1>";
}
?>
