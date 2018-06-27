<?php
include "dbcon.php";
$con = conectar();
$id = $_POST['id'];
$query = "SELECT * FROM `titulos` WHERE `id_titulo` = $id";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['id_titulo'].'.'
    .$extraido['nombres'].'.'
    .$extraido['dni'].'.'
    .$extraido['carrera'].'.'
    .$extraido['telefono'].'.'
    .$extraido['celular'].'.'
    .$extraido['sede'].'.'
    .$extraido['inicio/termino'].'.'
    .$extraido['observaciones'].'.'
    .$extraido['seguimiento'];
}
echo $data;
?>