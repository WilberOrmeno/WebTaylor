<?php
include("dbcon.php");
$con=conectar();
$foto=$_FILES["userprofile_picture"]["name"];
$ruta=$_FILES["userprofile_picture"]["tmp_name"];
echo $ruta."  ".$foto;
//$destino="FotosAlumnos/".$foto;
//$ID = $_POST['txtID'];
//$Login = $_POST['txtLogin'];
//$Password = $_POST['txtPassword'];
//$Nombre = $_POST['txtNombre'];
//$Fecha = $_POST['txtFecha'];
//$Estado = $_POST['txtEstado'];
//
//
//$insertado = "INSERT INTO `biblioteca`.`Usuarios` (`UsuarioID`, `UsuarioLogin`, `UsuarioNombre`, `UsuarioPassword`, `UsuarioNivel`,`UsuarioFecha`,`UsuarioEstado`)
//VALUES ('$ID', '$Login', '$Nombre ', '$Password', '$Tipo','$Fecha','$Estado');
//";
//$stmt = mysqli_query($con,$insertado);

?>

<html>
<body>
<br><br><br><br><br>

<center><h2 style="color: white;">////////Usuario Correctamente Registrado//////////</h2></center><br><br><br>
<center><form action="AgregarUsuario.php" method="POST"	>
        <button class="btn-lg btn-danger" type="submit" value=""> Regresar </button>
    </form></center>
</body>
</html>
