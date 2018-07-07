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

$cantidad = $_POST["cantidadAlumnos"];





$query = "INSERT INTO `notas`(`carrera`, `modulo`, `denominacion`, `docente`, `periodo`, `creditos`, `horas`) 
VALUES ('$carrera','$modulo', '$denominacion','$cantidad','$periodo','$creditos','$horas')";
$stmt = mysqli_query($con,$query);
$i = 0;

$query2= "SELECT * FROM `notas`";
$stmt2 = mysqli_query($con,$query2);
$id = 0;
while($extraido = mysqli_fetch_array($stmt2) ) {
    $id = $extraido['id'];
}
while ($i < $cantidad){
    echo "here";
    $alumnoid = "alumno".$i;
    $alumno = $_POST[$alumnoid];
    $c1id = "c1".$i;
    $c1 = $_POST[$c1id];
    $c2id = "c2".$i;
    $c2 = $_POST[$c2id];
    $c3id = "c3".$i;
    $c3 = $_POST[$c3id];
    $c4id = "c4".$i;
    $c4 = $_POST[$c4id];
    $c5id = "c5".$i;
    $c5 = $_POST[$c5id];
    $c6id = "c6".$i;
    $c6 = $_POST[$c6id];
    $c7id = "c7".$i;
    $c7 = $_POST[$c7id];
    $c8id = "c8".$i;
    $c8 = $_POST[$c8id];
    $query3= "INSERT INTO `notasdetalle`(`idNotas`,`alumno`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`) 
            VALUES ('$id','$alumno', '$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8')";
    echo $query3;
    $stmt3 = mysqli_query($con,$query3);
    $i++;
}



?>
