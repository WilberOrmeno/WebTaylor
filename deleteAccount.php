<?php
include("dbcon.php");
$con=conectar();
session_start();
$usr = $_SESSION['user'];
$query = "DELETE FROM `users` WHERE `username` = '$usr'";
$stmt = mysqli_query($con,$query);
echo "success"
?>

