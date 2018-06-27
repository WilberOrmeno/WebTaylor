<?php
include("dbcon.php");
$con=conectar();

$id = $_POST['id'];

$query = "UPDATE `titulos` SET `seguimiento`= '1' WHERE `id_titulo` = '$id'";
$stmt = mysqli_query($con,$query);
echo $query;
?>

