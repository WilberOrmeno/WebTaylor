<?php
include "dbcon.php";
$con = conectar();
$nombres = $_POST['nombres'];
$apPaterno = $_POST['apePaterno'];
$apMaterno = $_POST['apeMaterno'];
$semestre = $_POST['semestre'];
$query = "SELECT * FROM `recibos` WHERE ( `nombres`='$nombres' AND `ape_paterno`='$apPaterno' AND `ape_materno`='$apMaterno' AND `semestre`='$semestre')";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['recibo'].','
        .$extraido['fecha'].','
        .$extraido['cantidad'].','
        .$extraido['concepto'].','
        .$extraido['observaciones'].'|';
}
echo $data;
?>

