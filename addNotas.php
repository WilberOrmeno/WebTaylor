<?php
include("dbcon.php");
$con=conectar();
$carrera = $_POST["carrera"];
$modulo = $_POST["modulo"];
$denominacion = $_POST["denominacion"];
$docente = $_POST["docente"];
$periodo = $_POST["periodo"];
$creditos = $_POST["creditos"];
$horas = $_POST["horas"];

$alumno0 = $_POST["alumno0"];
$alumno1 = $_POST["alumno1"];
$c10 = $_POST["c10"];
$c11 = $_POST["c11"];
$c20 = $_POST["c20"];
$c21 = $_POST["c21"];
$c30 = $_POST["c30"];
$c31 = $_POST["c31"];
$c40 = $_POST["c40"];
$c41 = $_POST["c41"];
$c50 = $_POST["c50"];
$c51 = $_POST["c51"];
$c60 = $_POST["c60"];
$c61 = $_POST["c61"];
$c70 = $_POST["cc70"];
$c71 = $_POST["c71"];
$c80 = $_POST["c80"];
$c81 = $_POST["c81"];


$query = "INSERT INTO `notas`(`carrera`, `modulo`, `denominacion`, `docente`, `periodo`, `creditos`, `horas`) 
VALUES ('$carrera','$modulo', '$denominacion','$docente','$periodo','$creditos','$horas')";
$stmt = mysqli_query($con,$query);

$query2= "SELECT * FROM `notas`";
$stmt2 = mysqli_query($con,$query2);
$id = 0;
while($extraido = mysqli_fetch_array($stmt2) ) {
    $id = $extraido['id'];
}

$query3= "INSERT INTO `notasdetalle`(`idNotas`,`alumno`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`) 
VALUES ('$id','$alumno0', '$c10','$c20','$c30','$c40','$c50','$c60','$c70','$c80'),
 ('$id','$alumno1', '$c11','$c21','$c31','$c41','$c51','$c61','$c71','$c81')";
$stmt3 = mysqli_query($con,$query3);




?>
