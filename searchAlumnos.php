<?php
include("dbcon.php");
$con=conectar();
$alumno = $_POST['alumno'];
$data = '';

$query = "SELECT * FROM `alumnos` WHERE `nombre` LIKE '%$alumno%'";
$stmt = mysqli_query($con,$query);
while($extraido = mysqli_fetch_array($stmt) ) {
    $data .= $extraido['id_alumno'].','
        .$extraido['nombre'].','
        .$extraido['telefono'].','
        .$extraido['celular'].','
        .$extraido['email'].',';
    $id = $extraido['id_alumno'];
    $query2 = "SELECT * FROM `datosacademicos` WHERE `id_alumno` = '$id'";
    $stmt2 = mysqli_query($con,$query2);
    while ($extraido2 = mysqli_fetch_array($stmt2)){
        $data .= $extraido2['especialidad'].','
        .$extraido2['ciclo'].','
        .$extraido2['turno'].'|';
    }
}
echo $data;
?>

