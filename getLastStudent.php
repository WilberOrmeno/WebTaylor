<?php
include "dbcon.php";
$con = conectar();
$id = $_POST['id'];
$query = "SELECT * FROM `alumnos`";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = "Id alumno: ".$extraido['id_alumno'].'<br>'
    ."Nombres: ".$extraido['nombre'].'<br>'
        ."Sexo: ".$extraido['sexo'].'<br>'
    ."Estado Civil: ".$extraido['eCivil'].'<br>'
    ."Departamento de nacimiento: ".$extraido['DepartamentoNac'].'<br>'
    ."Provincia de nacimiento: ".$extraido['ProvinciaNac'].'<br>'
    ."Distrito de nacimiento: ".$extraido['DistritoNac'].'<br>'
    ."Fecha de nacimiento".$extraido['fecnac'].'<br>'
    ."Edad".$extraido['edad'].'<br>'
    ."Dirección: ".$extraido['direccion'].'<br>'
    ."Teléfono: ".$extraido['telefono'].'<br>'
    ."Celular: ".$extraido['celular'].'<br>'
    ."Email: ".$extraido['email'];
}
echo $data;
?>