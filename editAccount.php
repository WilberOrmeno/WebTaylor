<?php
include("dbcon.php");
$con=conectar();
session_start();
$usr = $_SESSION['user'];
$query = "SELECT `id_user` FROM `users` WHERE `username` = '$usr'";
$stmt = mysqli_query($con,$query);
$extraido = mysqli_fetch_array($stmt);

$idUser =  $extraido['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];

$query = "UPDATE `users` SET `username`= '$username' ,
`password`= '$password' ,`nombres`= '$nombres',`apellidos` = '$apellidos',`nivel`= 'Administrador',`email`= '$email' 
WHERE `id_user` = '$idUser'";
$stmt = mysqli_query($con,$query);
?>

