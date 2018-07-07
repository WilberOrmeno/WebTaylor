<?php
include("dbcon.php");
$con=conectar();
//datos academicos
$especialidad    =  $_POST['especialidad'];
$ciclo           =  $_POST['ciclo'];
$turno           =  $_POST['turno'];
$ocupacion       =  $_POST['ocupacion'];
$dni             =  $_POST['dni'];
$COB             =  $_POST['COB'];
$otros           =  $_POST['otros'];
$uCiclo          =  $_POST['uCiclo'];
$Semestre        =  $_POST['Semestre'];
$anio            =  $_POST['anio'];

//datos personales
$nombre          =$_POST['nombre'];
$sexo            =$_POST['sexo'];
$eCivil          =$_POST['eCivil'];
$Departamento    =$_POST['Departamento'];
$Provincia       =$_POST['Provincia'];
$Distrito        =$_POST['Distrito'];
$fecnac          =$_POST['fecnac'];
$edad            =$_POST['edad'];
$direccion       =$_POST['direccion'];
$Distrito2       =$_POST['Distrito2'];
$telefono        =$_POST['telefono'];
$celular         =$_POST['celular'];
$email           =$_POST['email'];
$sec             =$_POST['sec'];
$centro          =$_POST['centro'];
$foto=$_FILES["userprofile_picture"]["name"];
$ruta=$_FILES["userprofile_picture"]["tmp_name"];
$destino="FotosAlumnos/".$foto;
copy($ruta,$destino);

//Actividades extracurriculares
$musica         = 1;//$_POST['musica'];
$Canto          = 1; //$_POST['Canto'];
$Teatro         = 1;//$_POST['Teatro'];
$deportes       =$_POST['deportes'];


$query2 = "INSERT INTO `alumnos`(`nombre`, `sexo`, `eCivil`, `DepartamentoNac`, `ProvinciaNac`, `DistritoNac`, `fecnac`, `edad`, `direccion`, `DistritoDireccion`, `telefono`, `celular`, `email`, `IESecundaria`, `otroCS`, `foto`)
VALUES ('$nombre','$sexo','$eCivil','$Departamento','$Provincia','$Distrito','$fecnac',$edad,'$direccion','$Distrito2','$telefono','$celular','$email','$sec','$centro', '$destino')";
$stmt2 = mysqli_query($con,$query2);

echo $query2;
$query4 = "SELECT * FROM `alumnos`";
$stmt4 = mysqli_query($con,$query4);
$id = 0;
while($extraido = mysqli_fetch_array($stmt4) ) {
    $id = $extraido['id_alumno'];
}
$query = "INSERT INTO `datosacademicos`( `id_alumno`, `especialidad`, `ciclo`, `turno`, `ocupacion`, `dni`, `COB`, `otros`, `uCiclo`, `Semestre`, `anio`) 
VALUES ($id,'$especialidad','$ciclo','$turno','$ocupacion','$dni','$COB','$otros','$uCiclo','$Semestre','$anio')";
$stmt = mysqli_query($con,$query);

$query3 = "INSERT INTO `actividadesextracurriculares`(`id_alumno`, `musica`, `canto`, `teatro`, `deportes`) 
VALUES ($id,'$musica','$Canto','$Teatro','$deportes')";
$stmt3 = mysqli_query($con,$query3);

?>

