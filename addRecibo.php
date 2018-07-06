<?php
include("dbcon.php");
$con=conectar();
$nombres = $_POST['nombres'];
$apePaterno = $_POST['apePaterno'];
$apeMaterno = $_POST['apeMaterno'];
$NroMat = $_POST['NroMat'];
$especialidad = $_POST['especialidad'];
$turno = $_POST['turno'];
$semestre = $_POST['semestre'];
$recibo = $_POST['recibo'];
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$concepto = $_POST['concepto'];
$observaciones= $_POST['observaciones'];

$query = "INSERT INTO `recibos`( `nombres`, `ape_paterno`, `ape_materno`, `nro_matricula`, `especialidad`, `turno`, `semestre`, `recibo`, `fecha`, `cantidad`, `concepto`, `observaciones`) 
VALUES ('$nombres','$apePaterno','$apeMaterno','$NroMat','$especialidad','$turno','$semestre','$recibo','$fecha','$cantidad','$concepto','$observaciones')";
$stmt = mysqli_query($con,$query)
?>

