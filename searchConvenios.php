<?php
include("dbcon.php");
$con=conectar();
$convenio = $_POST['convenio'];
$query = "SELECT * FROM `convenios` WHERE `convenio` LIKE '%$convenio%'";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['id'].','
        .$extraido['convenio'].','
        .$extraido['entidad'].','
        .$extraido['vencimiento'].','
        .$extraido['rutaConvenio'].'|';
}
echo $data;
?>

