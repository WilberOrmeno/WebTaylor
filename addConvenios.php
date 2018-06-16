<?php
include("dbcon.php");
$con=conectar();
$entidad = $_POST['entidad'];
$vencimiento = $_POST['vencimiento'];
$doc=$_FILES["docConvenio"]["name"];
$ruta=$_FILES["docConvenio"]["tmp_name"];
$destino="DocConvenios/".$doc;
copy($ruta,$destino);
$query = "INSERT INTO `convenios`(`convenio`, `entidad`, `vencimiento`, `rutaConvenio`) VALUES ('$doc','$entidad','$vencimiento','$destino')";
$stmt = mysqli_query($con,$query)
?>

