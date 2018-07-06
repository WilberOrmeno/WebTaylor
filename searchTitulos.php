<?php
include("dbcon.php");
$con=conectar();
$nombres = $_POST['nombres'];
$data = '';
$query = "SELECT * FROM `titulos` WHERE `nombres` LIKE '%$nombres%'";
$stmt = mysqli_query($con,$query);

while($extraido = mysqli_fetch_array($stmt) ) {
    $data .= $extraido['id_titulo'].','
        .$extraido['nombres'].','
        .$extraido['dni'].','
        .$extraido['telefono'].','
        .$extraido['celular'].','
        .$extraido['carrera'].','
        .$extraido['seguimiento'].'|';
}

if($nombres != "")
{
    $query = "SELECT * FROM `titulos` WHERE `dni` LIKE '%$nombres%'";
    $stmt = mysqli_query($con,$query);

    while($extraido = mysqli_fetch_array($stmt) ) {
        $data .= $extraido['id_titulo'].','
            .$extraido['nombres'].','
            .$extraido['dni'].','
            .$extraido['telefono'].','
            .$extraido['celular'].','
            .$extraido['carrera'].','
            .$extraido['seguimiento'].'|';
    }

    $query = "SELECT * FROM `titulos` WHERE `carrera` LIKE '%$nombres%'";
    $stmt = mysqli_query($con,$query);

    while($extraido = mysqli_fetch_array($stmt) ) {
        $data .= $extraido['id_titulo'].','
            .$extraido['nombres'].','
            .$extraido['dni'].','
            .$extraido['telefono'].','
            .$extraido['celular'].','
            .$extraido['carrera'].','
            .$extraido['seguimiento'].'|';
    }
}

echo $data;
?>

