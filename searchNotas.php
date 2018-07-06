<?php
include("dbcon.php");
$con=conectar();
$notas = $_POST['notas'];
$data = '';

$query = "SELECT * FROM `notas` WHERE `carrera` LIKE '%$notas%'";
$stmt = mysqli_query($con,$query);
while($extraido = mysqli_fetch_array($stmt) ) {
    $data .= $extraido['id'].','
        .$extraido['carrera'].','
        .$extraido['modulo'].','
        .$extraido['docente'].','
        .$extraido['periodo'].','
        .$extraido['creditos'].'|';
}
if($notas != ""){
    $query = "SELECT * FROM `notas` WHERE `docente` LIKE '%$notas%'";
    $stmt = mysqli_query($con,$query);
    while($extraido = mysqli_fetch_array($stmt) ) {
        $data .= $extraido['id'].','
            .$extraido['carrera'].','
            .$extraido['modulo'].','
            .$extraido['docente'].','
            .$extraido['periodo'].','
            .$extraido['creditos'].'|';
    }

    $query = "SELECT * FROM `notas` WHERE `modulo` LIKE '%$notas%'";
    $stmt = mysqli_query($con,$query);
    while($extraido = mysqli_fetch_array($stmt) ) {
        $data .= $extraido['id'].','
            .$extraido['carrera'].','
            .$extraido['modulo'].','
            .$extraido['docente'].','
            .$extraido['periodo'].','
            .$extraido['creditos'].'|';
    }


}
echo $data;
?>

