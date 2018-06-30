<?php
include("dbcon.php");
$con=conectar();
$nombres = $_POST['nombres'];
$query = "SELECT * FROM `titulos` WHERE `nombres` LIKE '%$nombres%'";
$stmt = mysqli_query($con,$query);
$data = '';

while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['id_titulo'].','
        .$extraido['nombres'].','
        .$extraido['dni'].','
        .$extraido['telefono'].','
        .$extraido['celular'].','
        .$extraido['carrera'].','
        .$extraido['seguimiento'].'|';
}
echo $data;
?>

