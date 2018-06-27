<?php
include("dbcon.php");
$con=conectar();

$id = $_POST['id'];
$nombreCompletoE = $_POST['nombreCompletoE'];
$dniE = $_POST['dniE'];
$carreraE = $_POST['carreraE'];
$telefonoE = $_POST['telefonoE'];
$celularE = $_POST['celularE'];
$sedeE = $_POST['sedeE'];
$inicioterminoE = $_POST['inicioterminoE'];
$obsE = $_POST['obsE'];

$query = "UPDATE `titulos` SET `nombres`='$nombreCompletoE',`dni`='$dniE',`carrera`='$carreraE',`telefono`='$telefonoE',`celular`='$celularE',
`sede`='$sedeE',`inicio/termino`='$inicioterminoE',`observaciones`='$obsE' WHERE `id_titulo` = $id";
$stmt = mysqli_query($con,$query);
echo "success"
?>

