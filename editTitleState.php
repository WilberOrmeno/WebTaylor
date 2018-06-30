<?php
include("dbcon.php");
$con=conectar();

$id = $_POST['id'];
$state = $_POST['state'];

$query = "UPDATE `titulos` SET `seguimiento`= '$state' WHERE `id_titulo` = '$id'";
$stmt = mysqli_query($con,$query);
echo $query;
?>

