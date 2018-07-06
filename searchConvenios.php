<?php
include("dbcon.php");
$con=conectar();
$convenio = $_POST['convenio'];
$data = '';

$query = "SELECT * FROM `convenios` WHERE `convenio` LIKE '%$convenio%'";
$stmt = mysqli_query($con,$query);

while($extraido = mysqli_fetch_array($stmt) ) {
    $data .= $extraido['id'].','
        .$extraido['convenio'].','
        .$extraido['vencimiento'].','
        .$extraido['entidad'].','
        .$extraido['rutaConvenio'].'|';
}
if($convenio != ""){
    $query = "SELECT * FROM `convenios` WHERE `entidad` LIKE '%$convenio%'";
    $stmt = mysqli_query($con,$query);

    while($extraido = mysqli_fetch_array($stmt) ) {
        $data .= $extraido['id'].','
            .$extraido['convenio'].','
            .$extraido['vencimiento'].','
            .$extraido['entidad'].','
            .$extraido['rutaConvenio'].'|';
    }
}
echo $data;
?>

