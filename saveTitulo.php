<?php
include("dbcon.php");
$con=conectar();
$Nombres = $_POST['nombres'];
$DNI = $_POST['dni'];
$Carrera= $_POST['carrera'];
$Telefono = $_POST['telefono'];
$Celular = $_POST['celular'];
$Sede = $_POST['sede'];
$InicioTermino = $_POST['inicio/termino'];
$Observaciones = $_POST['observaciones'];
$Seguimiento = 0;

$query = "INSERT INTO `titulos`(`nombres`, `dni`, `carrera`, `telefono`, `celular`, `sede`, `inicio/termino`, `observaciones`, `seguimiento`)
VALUES ('$Nombres','$DNI', '$Carrera','$Telefono','$Celular','$Sede','$InicioTermino','$Observaciones', '$Seguimiento')";
$stmt = mysqli_query($con,$query);

echo "Realizado";

?>
