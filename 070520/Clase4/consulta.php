<?php

require ("conexion.php");

$conexion = new mysqli('127.0.0.1','root','','fes_aragon');
//generar query
$consulta_sql = "SELECT * FROM ALUMNO";
//mandar query por medio de la conxeion y sera almacenad en una varible
$resultado = $conexion->query($consulta_sql);
//retorna el numero del resultado
$count = mysqli_num_rows($resultado);

echo "<table border='2'>
<tr>
    <th>Usuario</th>
    <th>Carrera</th>
    <th>No Cuenta Institutocional</th>
    <th>Direccion</th>
    <th>Telfono</th>
    <th>Correo electronico</th>
    <th>Contraseña</th>
    <th>Fecha de Registrado</th>
</tr>";


if ($count > 0) {
    //se pintan los registro de la DB
    while($row = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>".$row['nombre_usuario'] ."</td>";
        echo "<td>".$row['carrera'] ."</td>";
        echo "<td>".$row['no_cuenta'] ."</td>";
        echo "<td>".$row['direccion'] ."</td>";
        echo "<td>".$row['telefono'] ."</td>";
        echo "<td>".$row['email'] ."</td>";
        echo "<td>".$row['password'] ."</td>";
        echo "<td>".$row['fecha_registro'] ."</td>";
        echo "</tr></table>";
    }
}else {
    echo "<h1 styel='color:red'>No hay registro</h1>";
}


?>
